<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $user = new User();
        $user->email = Str::lower($request->email);
        $user->password = '12345678';
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

        return to_route('clients.index')->with('status', 'Client profile created successfully');
    }

    public function show(Client $client): View
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client): View
    {
        $user = User::first();
        $profile = Profile::first();
        return view('clients.edit', compact('client', 'user', 'profile'));
    }

    public function update(Request $request, Client $client, Profile $profile): RedirectResponse
    {
        Client::where('id', $client->id)
            ->update([
                'restrictions' => $request->input('restrictions'),
                'special_request' => $request->input('special_request'),
                'emergency_contact' => $request->input('emergency_contact')
            ]);

        User::where('id', $client->user_id)
            ->update([
                'email' => $request->input('email')
            ]);

        Profile::where('id', $profile->user_id)
            ->update([
                'type' => $request->input('type'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'phone' => $request->input('phone'),
                'id_card_number' => $request->input('id_card_number'),
                'dob' => $request->input('dob'),
                'country' => $request->input('country'),
                'id_card_number' => $request->input('id_card_number'),
                'nationality' => $request->input('nationality')
            ]);
        return to_route('clients.index')->with('status', 'Passenger profile updated successfully.');
    }
}
