<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function registerUser(Request $request)
    {
        $user = new User;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Profile::create([
            'type' => $request->type,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_id' => $user->id,
            'phone' => $request->phone,
            'DOB' => $request->DOB,
            'country' => $request->country,
            'id_card_number' => $request->id_card_number,
            'nationality' => $request->nationality
        ]);

        $success['token'] = $user->createToken('API_TRAVELLER')->plainTextToken;
        $success['user'] = $user->email;
        
        return $success;
    }

    public function loginUser(Request $request)
    {
        $user = Auth::user();
        $success['token'] =  $user->createToken('API_TRAVELLER')->plainTextToken;
        $success['user'] = new UserResource($user);

        return $success;
    }
}
