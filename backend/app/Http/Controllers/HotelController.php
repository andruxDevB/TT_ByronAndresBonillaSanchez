<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HotelController extends Controller
{
    public function index(): View
    {
        $hotels = Hotel::get();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Hotel $hotel)
    {
    }

    public function edit(Hotel $hotel)
    {
    }

    public function update(Request $request, Hotel $hotel)
    {
    }

    public function destroy(Hotel $hotel)
    {
    }
}
