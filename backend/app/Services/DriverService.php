<?php

namespace App\Services;

use App\Http\Resources\DriverResource;
use App\Models\Driver;
use App\Models\GuideDriverProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DriverService
{
    public function createDriver(Request $request): Driver
    {
        $profile = new GuideDriverProfile();
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = Str::lower($request->email);
        $profile->phone = $request->phone;
        $profile->id_card_number = $request->id_card_number;
        $profile->save();

        $last = $profile->id;

        $driver = new Driver();
        $driver->guide_driver_profile_id = $last;
        $driver->company = $request->company;
        $driver->type_transport = $request->transport_type;
        $driver->save();

        return $driver;
    }

    public function updateDriver(Request $request, Driver $driver)
    {
        Driver::where('id', $driver->id)
            ->update([
                'company' => $request->input('company'),
                'transport_type' => $request->input('type_transport')
            ]);

        GuideDriverProfile::where('id', $driver->guide_driver_profile_id)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'id_card_number' => $request->input('id_card_number'),
            ]);
    }

    public function apiRegisterDriver(Request $request){
        $profile = new GuideDriverProfile();
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->email = Str::lower($request->input('email'));
        $profile->phone = $request->input('phone');
        $profile->id_card_number = $request->input('id_card_number');
        $profile->save();

        $driver = Driver::create([
            'guide_driver_profile_id' => $profile->id,
            'company' => $request->company,
            'transport_type' => $request->transport_type,
        ]);

        $success = new DriverResource($driver);
        return $success;
    }
}
