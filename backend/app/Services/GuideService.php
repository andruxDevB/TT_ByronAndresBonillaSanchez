<?php

namespace App\Services;

use App\Models\Guide;
use App\Models\GuideDriverProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuideService
{
    public function createGuide(Request $request): Guide
    {
        $profile = new GuideDriverProfile();
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = Str::lower($request->email);
        $profile->phone = $request->phone;
        $profile->id_card_number = $request->id_card_number;
        $profile->save();

        $last = $profile->id;

        $guide = new Guide();
        $guide->guide_driver_profile_id = $last;
        $guide->languajes = $request->languajes;
        $guide->save();

        return $guide;
    }

    public function updateGuide(Request $request, Guide $guide)
    {
        Guide::where('id', $guide->id)
            ->update([
                'languajes' => $request->input('languajes')
            ]);

        GuideDriverProfile::where('id', $guide->guide_driver_profile_id)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'id_card_number' => $request->input('id_card_number'),
            ]);
    }
}
