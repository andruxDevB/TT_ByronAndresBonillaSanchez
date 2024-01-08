<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use App\Models\Driver;
use App\Services\DriverService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DriverController extends Controller
{
    public function index(): View
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    public function create(): View
    {
        return view('drivers.create');
    }

    public function store(StoreDriverRequest $request, DriverService $driverService): RedirectResponse
    {
        $driverService->createDriver($request);
        return to_route('drivers.index')->with('status', 'Driver profile created successfully');
    }

    public function show(Driver $driver): View
    {
        return view('drivers.show', compact('driver'));
    }

    public function edit(Driver $driver): View
    {
        return view('drivers.edit', compact('driver'));
    }

    public function update(UpdateDriverRequest $request, DriverService $driverService, Driver $driver): RedirectResponse
    {
        $driverService->updateDriver($request, $driver);
        return to_route('drivers.index')->with('status', 'Driver profile updated successfully.');
    }
}
