<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Restaurant;
use App\Services\RestaurantService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    public function index(): View
    {
        $restaurants = Restaurant::get();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create(): View
    {
        return view('restaurants.create');
    }

    public function store(StoreRestaurantRequest $request, RestaurantService $restaurantService): RedirectResponse
    {
        $restaurantService->createRestaurant($request);
        return to_route('restaurants.index')->with('status', 'Restaurant information created successfully');
    }

    public function show(Restaurant $restaurant): View
    {
        return view('restaurants.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant): View
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(UpdateRestaurantRequest $request, RestaurantService $restaurantService, Restaurant $restaurant): RedirectResponse
    {
        $restaurantService->updateRestaurant($request, $restaurant);
        return redirect()->route('restaurants.show', $restaurant->id)->with('status', 'Restaurant information updated successfully.');
    }
}
