<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Services\RoomService;
use Illuminate\Http\RedirectResponse;

class RoomController extends Controller
{
    public function store(StoreRoomRequest $request, RoomService $roomService): RedirectResponse
    {
        $roomService->createRoom($request);
        return redirect()->back()->with('status', 'New room created successfully.');
    }
}
