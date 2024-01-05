<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCruiseRequest;
use App\Models\Cruise;
use App\Services\CruiseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CruiseController extends Controller
{
    public function index(): View
    {
        $cruises = Cruise::get();
        return view('cruises.index', compact('cruises'));
    }

    public function create(): View
    {
        return view('cruises.create');
    }

    public function store(StoreCruiseRequest $request, CruiseService $cruiseservice): RedirectResponse
    {
        $cruiseservice->createCruise($request);
        return to_route('cruises.index')->with('status', 'Cruise information created successfully');
    }

    public function show(Cruise $cruise): View
    {
        return view('cruises.show', compact('cruise'));
    }

    public function edit(Cruise $cruise): View
    {
        return view('cruises.edit', compact('cruise'));
    }

    public function update(StoreCruiseRequest $request, CruiseService $cruiseservice, Cruise $cruise): RedirectResponse
    {
        $cruiseservice->updateHotel($request, $cruise);
        return redirect()->route('cruises.show', $cruise->id)->with('status', 'Hotel information updated successfully.');
    }
}
