<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Resources\RestaurantResource;
use App\Http\Resources\RestaurantResourceCollection;
use App\Models\Restaurant;
use App\Services\RestaurantService;
use Illuminate\Http\JsonResponse;

class RestaurantController extends BaseController
{
    public function index(): JsonResponse
    {
        $restaurant = Restaurant::all();
        return $this->sendResponse(new RestaurantResourceCollection($restaurant), 'Restaurants retrieved successfully.');
    }

    public function store(StoreRestaurantRequest $request, RestaurantService $restaurantService): JsonResponse
    {
        $restaurant = $restaurantService->apiRegisterRestaurant($request);
        return $this->sendResponse($restaurant, 'Restaurant created succesfully.');
    }

    public function show(Restaurant $restaurant): JsonResponse
    {
        $success = new RestaurantResource($restaurant);
        return $this->sendResponse($success, 'Restaurant showed succesfully.');
    }
}
