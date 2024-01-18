<?php

namespace App\Services;

use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RestaurantService
{
    public function createRestaurant(Request $request): Restaurant
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->restaurant_name;
        $restaurant->country = $request->country;
        $restaurant->city = $request->city;
        $restaurant->sales_executive = $request->sales_executive;
        $restaurant->email = Str::lower($request->email);
        $restaurant->phone = $request->phone;
        $restaurant->save();

        return $restaurant;
    }

    public function updateRestaurant(Request $request, Restaurant $restaurant)
    {
        return
            Restaurant::where('id', $restaurant->id)
            ->update([
                'name' => $request->input('restaurant_name'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
                'sales_executive' => $request->input('sales_executive'),
                'email' => Str::lower($request->input('email')),
                'phone' => $request->input('phone'),
            ]);
    }

    public function apiRegisterRestaurant(Request $request)
    {
        $restaurant = Restaurant::create([
            'name' => $request->restaurant_name,
            'country' => $request->country,
            'city' => $request->city,
            'sales_executive' => $request->sales_executive,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $success = new RestaurantResource($restaurant);
        return $success;
    }
}
