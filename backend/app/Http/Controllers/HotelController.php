<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Str;

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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'country' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'category' => 'required',
            'sales_executive' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|max_digits:13',
        ]);

        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->country = $request->country;
        $hotel->city = $request->city;
        $hotel->category = $request->category;
        $hotel->sales_executive = $request->sales_executive;
        $hotel->email = Str::lower($request->email);
        $hotel->phone = $request->phone;
        $hotel->save();

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

    public function update(Request $request, Hotel $hotel): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'country' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'category' => 'required',
            'sales_executive' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|max_digits:13',
        ]);

        DB::table('hotels')
            ->where('id', $hotel->id)
            ->update([
                'name' => $request->input('name'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
                'category' => $request->input('category'),
                'sales_executive' => $request->input('sales_executive'),
                'email' => Str::lower($request->input('email')),
                'phone' => $request->input('phone'),
            ]);

        return redirect()->route('hotels.show', $hotel->id)->with('status', 'Hotel information updated successfully.');
    }

    /* public function destroy(Hotel $hotel)
    {
    } */
}
