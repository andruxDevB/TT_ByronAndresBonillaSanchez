<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Driver;
use App\Models\Guide;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(): View
    {
        $programs = Program::get();
        return view('program.index', compact('programs'));
    }

    public function create(): View
    {
        $clients = DB::table('clients')
            ->join('users', 'clients.user_id', '=', 'users.id')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->pluck(DB::raw("concat(profiles.first_name,' ',profiles.last_name) as client_full_name"), 'clients.id');
        return view('program.create', compact('clients'));
    }

    public function store(Request $request): RedirectResponse
    {
        $program = new Program();
        $program->name = $request->program_name;
        $program->num_pax = $request->num_pax;
        $tour_year = Carbon::parse($request->start_date);
        $program->tour_year = $tour_year->year;
        $program->file_number = $request->file_number;
        $program->country_tours = $request->country_tours;
        $program->sales_executive = $request->sales_executive;
        $program->type_tour = $request->type_tour;
        $program->general_notes = $request->general_notes;
        $program->client_id = $request->client;
        $program->start_date = $request->start_date;
        $end_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $program->end_date = $end_date->copy()->addDays($request->tour_days);
        $program->tour_days = $request->tour_days;
        $program->save();
        return to_route('programs.index')->with('status', 'Program created successfully');
    }

    public function show(Program $program, Activity $activities, Guide $guides, Driver $drivers): View
    {
        return view('program.show', compact('program', 'guides', 'drivers', 'activities'));
    }
}
