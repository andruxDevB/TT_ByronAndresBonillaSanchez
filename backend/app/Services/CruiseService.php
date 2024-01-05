<?php

namespace App\Services;

use App\Models\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CruiseService
{
    public function createCruise(Request $request): Cruise
    {
        $cruise = new Cruise;
        $cruise->name = $request->cruise_name;
        $cruise->category = $request->category;
        $cruise->sales_executive = $request->sales_executive;
        $cruise->email = Str::lower($request->email);
        $cruise->phone = $request->phone;
        $cruise->save();

        return $cruise;
    }

    public function updateHotel(Request $request, Cruise $cruise)
    {
        return
            Cruise::where('id', $cruise->id)
            ->update([
                'name' => $request->input('cruise_name'),
                'category' => $request->input('category'),
                'sales_executive' => $request->input('sales_executive'),
                'email' => Str::lower($request->input('email')),
                'phone' => $request->input('phone'),
            ]);
    }
}
