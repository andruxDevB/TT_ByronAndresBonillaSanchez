<?php

namespace App\Http\Controllers;

use App\Models\Activity;
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

    public function show(Program $program): View
    {
        $activities = Activity::where('program_id', 'id')->get();
        return view('program.show', compact('program','activities'));
    }

    public function edit(Program $program): View
    {
        return view('program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {}

    public function destroy(Program $program)
    {}
}
