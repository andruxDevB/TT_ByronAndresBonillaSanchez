<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreHotelRequest;
use App\Services\HotelService;

class HotelController extends Controller
{
    public function index(): View
    {
        $hotels = Hotel::get();
        return view('hotels.index', compact('hotels'));
    }

    public function create(): View
    {
        return view('hotels.create');
    }

    public function store(StoreHotelRequest $request, HotelService $hotelservice): RedirectResponse
    {
        $hotelservice->createHotel($request);
        return to_route('hotels.index')->with('status', 'Hotel information created successfully');
    }

    public function show(Hotel $hotel): View
    {
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel): View
    {
        return view('hotels.edit', compact('hotel'));
    }

    public function update(StoreHotelRequest $request, HotelService $hotelservice, Hotel $hotel): RedirectResponse
    {
        $hotelservice->updateHotel($request, $hotel);
        return redirect()->route('hotels.show', $hotel->id)->with('status', 'Hotel information updated successfully.');
    }
}
