<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    public function index(): View
    {
        $restaurants = Restaurant::get();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Restaurant $restaurant)
    {
    }

    public function edit(Restaurant $restaurant)
    {
    }

    public function update(Request $request, Restaurant $restaurant)
    {
    }

    public function destroy(Restaurant $restaurant)
    {
    }
}
