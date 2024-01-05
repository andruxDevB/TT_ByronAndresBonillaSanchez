<?php

namespace App\Services;

use App\Models\Cabin;
use Illuminate\Http\Request;

class CabinService
{
    public function createCabin(Request $request): Cabin
    {
        $cabin = new Cabin;
        $cabin->cabin_name = $request->cabin_name;
        $cabin->deck = $request->deck;
        $cabin->cruise_id = $request->idc;
        $cabin->save();

        return $cabin;
    }
}
