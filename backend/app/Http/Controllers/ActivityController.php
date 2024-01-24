<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Cruise;
use App\Models\Hotel;
use App\Models\Program;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ActivityController extends Controller
{
    public function create(): View
    {
        $program = Program::first();
        $hotels = Hotel::all()->pluck('name', 'id');
        $restaurants = Restaurant::all()->pluck('name', 'id');
        $cruises = Cruise::all()->pluck('name', 'id');
        $guides = DB::table('guides')
            ->join('guide_driver_profiles', 'guides.guide_driver_profile_id', '=', 'guide_driver_profiles.id')
            ->pluck(DB::raw("concat(guide_driver_profiles.first_name,' ',guide_driver_profiles.last_name) as guide_full_name"), 'guides.id');

        $drivers = DB::table('drivers')
            ->join('guide_driver_profiles', 'drivers.guide_driver_profile_id', '=', 'guide_driver_profiles.id')
            ->pluck(DB::raw("concat(guide_driver_profiles.first_name,' ',guide_driver_profiles.last_name) as driver_full_name"), 'drivers.id');

        return view('activities.create', compact('program', 'restaurants', 'hotels', 'cruises', 'guides', 'drivers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $program = $request->program_id;
        $activity = new Activity();
        $activity->name = $request->activity_name;
        $activity->date = $request->activity_date;
        $activity->time_pickup = $request->time_pickup;
        $date = Carbon::parse($request->activity_date);
        $activity->day = $date->isoFormat('dddd');
        $activity->breakfast_id = $request->breakfast;
        $activity->lunch_id = $request->lunch;
        $activity->dinner_id = $request->dinner;
        $activity->guide_id = $request->guide;
        $activity->driver_id = $request->driver;
        $activity->hotel_id = $request->hotel;
        $activity->cruise_id = $request->cruise;
        $activity->remarks = $request->remarks;
        $activity->program_id = $program;
        $activity->save();
        return to_route('programs.show', $program)->with('status', 'Activity created successfully');
    }

    public function show(Activity $activity): View
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
    }

    public function update(Request $request, Activity $activity)
    {
    }

    public function destroy(Activity $activity)
    {
    }
}
