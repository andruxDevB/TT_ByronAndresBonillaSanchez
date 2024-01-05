<?php

namespace App\Services;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomService
{
    public function createRoom(Request $request): Room
    {
        $room = new Room;
        $room->name = $request->room_type;
        $room->hotel_id = $request->idh;
        $room->save();

        return $room;
    }
}
