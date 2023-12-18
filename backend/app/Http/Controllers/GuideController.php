<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\GuideDriverProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View as View;

class GuideController extends Controller
{
    public function index(): View
    {
        $guides = Guide::all();
        return view('guides.index', compact('guides'));
    }
    
    public function create(): View
    {
        $profile = new GuideDriverProfile();
        $guide = new Guide();
        return view('guides.create', compact('profile', 'guide'));
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'id_card_number' => 'required',
            'languajes' => 'required'
        ]);

        $profile = new GuideDriverProfile;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->id_card_number = $request->id_card_number;
        $profile->save();

        $last = $profile->id;

        $guide = new Guide;
        $guide->guide_driver_profile_id = $last;
        $guide->languajes = $request->languajes;
        $guide->save();

        return to_route('guides.index')->with('status', 'Guide profile created successfully');
    }
    
    public function show(Guide $guide)
    {
        return view('guides.show', compact('guide'));
    }
    
    public function edit(Guide $guide)
    {
        $profile = GuideDriverProfile::get();
        return view('guides.edit', compact('profile', 'guide'));
    }
    
    public function update(Request $request, Guide $guide)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'id_card_number' => 'required',
            'languajes' => 'required'
        ]);

        DB::table('guides')
            ->where('id', $guide->id)
            ->update([
                'languajes' => $request->input('languajes')
            ]);

        DB::table('profiles')
            ->where('id', $guide->profile_id)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'id_card_number' => $request->input('id_card_number')
            ]);

        return to_route('guides.index')->with('status', 'Guide profile updated successfully');
    }
    
    public function destroy(Guide $guide)
    {}
}
