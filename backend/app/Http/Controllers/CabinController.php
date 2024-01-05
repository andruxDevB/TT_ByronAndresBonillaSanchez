<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCabinRequest;
use App\Services\CabinService;
use Illuminate\Http\RedirectResponse;

class CabinController extends Controller
{
    public function store(StoreCabinRequest $request, CabinService $cabinService): RedirectResponse
    {
        $cabinService->createCabin($request);
        return redirect()->back()->with('status', 'New cabin created successfully.');
    }
}
