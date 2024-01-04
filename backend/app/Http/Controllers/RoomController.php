<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idh' => 'required',
            'room_type' => 'required',
        ]);
        $room = new Room;
        $room->name = $request->room_type;
        $room->hotel_id = $request->idh;
        $room->save();

        return redirect()->back()->with('status', 'New room created successfully.');
    }
}
