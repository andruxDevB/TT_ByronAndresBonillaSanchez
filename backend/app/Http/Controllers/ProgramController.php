<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Driver;
use App\Models\Guide;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index() : View
    {
        $programs = Program::get();
        return view('program.index', compact('programs'));
    }
    
    public function create()
    {}

    public function store(Request $request)
    {}

    public function show(Program $program, Guide $guides, Driver $drivers): View
    {
        return view('program.show', compact('program', 'guides', 'drivers'));
    }

    /* public function show(Program $program, Guide $guides): View
    {
        $activities = Activity::where('program_id', 'id')
        ->join('guides', 'guides.id', '=' , 'activities.guide_id')
        ->get();
        $drivers = Driver::where('id', 'driver_id')->get();
        return view('program.show', compact('program','activities','guides','drivers'));
    } */

    public function edit(Program $program): View
    {
        return view('program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {}

    public function destroy(Program $program)
    {}
}
