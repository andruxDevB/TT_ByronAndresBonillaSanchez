<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Resources\HotelResource;
use App\Http\Resources\HotelResourceCollection;
use App\Models\Hotel;
use App\Services\HotelService;
use Illuminate\Http\JsonResponse;

class HotelController extends BaseController
{
    public function index(): JsonResponse
    {
        $hotels = Hotel::all();
        return $this->sendResponse(new HotelResourceCollection($hotels), 'Hotels retrieved successfully.');
    }

    public function store(StoreHotelRequest $request, HotelService $hotelService): JsonResponse
    {
        $hotel = $hotelService->apiRegisterHotel($request);
        return $this->sendResponse($hotel, 'Hotel created succesfully.');
    }

    public function show(Hotel $hotel): JsonResponse
    {
        $success = new HotelResource($hotel);
        return $this->sendResponse($success, 'Hotel showed succesfully.');
    }
}
