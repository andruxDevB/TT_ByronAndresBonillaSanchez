<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDomesticFlightRequest;
use App\Models\DomesticFlight;
use App\Services\DomesticFlightService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DomesticFlightController extends Controller
{
    public function store(StoreDomesticFlightRequest $request, DomesticFlightService $domesticFlightService): RedirectResponse
    {
        $domesticFlightService->createDomesticFlight($request);
        return redirect()->back()->with('status', 'Domestic Flight Information added successfully');
    }

    public function update(Request $request, DomesticFlight $domesticFlight)
    {}
}
