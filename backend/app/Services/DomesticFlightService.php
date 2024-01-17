<?php

namespace App\Services;

use App\Models\DomesticFlight;
use App\Models\InformationFlight;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DomesticFlightService
{
    public function createDomesticFlight(Request $request): DomesticFlight
    {
        $flight_information = new InformationFlight();
        $flight_information->route = $request->route;
        $flight_information->date_flight = $request->date_flight;
        $date = Carbon::parse($request->date_flight);
        $flight_information->day = $date->isoFormat('dddd');
        $flight_information->airline = $request->airline;
        $flight_information->flight_number = $request->flight_number;
        $flight_information->departure_time = $request->departure_time;
        $flight_information->arrival_time = $request->arrival_time;
        $flight_information->save();

        $last = $flight_information->id;

        $domesticFlight = new DomesticFlight();
        $domesticFlight->information_flight_id = $last;
        $domesticFlight->program_id = $request->idp;
        $domesticFlight->reserve_code = $request->reserve_code;
        $domesticFlight->save();
        
        return $domesticFlight;
    }


    /* public function updateGuide(Request $request, Guide $guide)
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

    public function apiRegisterGuide(Request $request){
        $profile = new GuideDriverProfile();
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->email = Str::lower($request->input('email'));
        $profile->phone = $request->input('phone');
        $profile->id_card_number = $request->input('id_card_number');
        $profile->save();

        $guide = Guide::create([
            'guide_driver_profile_id' => $profile->id,
            'languajes' => $request->languajes,
        ]);

        $success = new GuideResource($guide);
        return $success;
    } */
}
