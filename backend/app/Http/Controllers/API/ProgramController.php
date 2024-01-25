<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Program;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends BaseController
{
    /* public function index(): JsonResponse
    {
        $hotels = Hotel::all();
        return $this->sendResponse(new HotelResourceCollection($hotels), 'Hotels retrieved successfully.');
    } */

    public function store(Request $request): JsonResponse
    {
        $tour_year = Carbon::parse($request->start_date);
        $end_date = Carbon::createFromFormat('Y-m-d', $request->start_date);

        $user = new User();
        $user->email = Str::lower($request->email);
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $lastuser = $user->id;

        $profile = new Profile();
        $profile->type = $request->input('type');
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->phone = $request->input('phone');
        $profile->id_card_number = $request->input('id_card_number');
        $profile->dob = $request->input('dob');
        $profile->country = $request->input('country');
        $profile->nationality = $request->input('nationality');
        $profile->user_id = $lastuser;
        $profile->save();

        $client = new Client();
        $client->user_id = $lastuser;
        $client->restrictions = $request->input('restrictions');
        $client->special_request = $request->input('special_request');
        $client->emergency_contact = $request->input('emergency_contact');
        $client->save();
        $client_id = $client->id;

        $program = new Program();
        $program->name = $request->input('program_name');
        $program->num_pax = $request->input('num_pax');
        $program->tour_year = $tour_year->year;
        $program->file_number = $request->input('file_number');
        $program->country_tours = $request->input('country_tours');
        $program->sales_executive = $request->input('sales_executive');
        $program->type_tour = $request->input('type_tour');
        $program->general_notes = $request->input('general_notes');
        $program->client_id = $client_id;
        $program->start_date = $request->input('start_date');
        $program->end_date = $end_date->copy()->addDays($request->tour_days);
        $program->tour_days = $request->input('tour_days');
        $program->save();
        return $this->sendResponse($program, 'Program created succesfully.');
    }

    /* public function show(Hotel $hotel): JsonResponse
    {
        $success = new HotelResource($hotel);
        return $this->sendResponse($success, 'Hotel showed succesfully.');
    } */
}
