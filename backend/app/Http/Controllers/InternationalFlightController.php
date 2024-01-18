<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInternationalFlightRequest;
use App\Models\InternationalFlight;
use App\Services\InternationalFlightService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InternationalFlightController extends Controller
{
    public function store(StoreInternationalFlightRequest $request, InternationalFlightService $internationalFlightService): RedirectResponse
    {
        $internationalFlightService->createInternationalFlight($request);
        return redirect()->back()->with('success', 'International Flight Information added successfully');
    }

    public function update(Request $request, InternationalFlight $internationalFlight)
    {}
}
