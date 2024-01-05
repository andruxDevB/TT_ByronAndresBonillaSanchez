<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelService
{
    public function createHotel(Request $request): Hotel
    {
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->country = $request->country;
        $hotel->city = $request->city;
        $hotel->category = $request->category;
        $hotel->sales_executive = $request->sales_executive;
        $hotel->email = Str::lower($request->email);
        $hotel->phone = $request->phone;
        $hotel->save();

        return $hotel;
    }

    public function updateHotel(Request $request, Hotel $hotel)
    {
        return
            Hotel::where('id', $hotel->id)
            ->update([
                'name' => $request->input('name'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
                'category' => $request->input('category'),
                'sales_executive' => $request->input('sales_executive'),
                'email' => Str::lower($request->input('email')),
                'phone' => $request->input('phone'),
            ]);
    }
}
