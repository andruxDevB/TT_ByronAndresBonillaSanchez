<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreCruiseRequest;
use App\Http\Resources\CruiseResourceCollection;
use App\Http\Resources\CruiseResource;
use App\Models\Cruise;
use App\Services\CruiseService;
use Illuminate\Http\JsonResponse;

class CruiseController extends BaseController
{
    public function index(): JsonResponse
    {
        $cruises = Cruise::all();
        return $this->sendResponse(new CruiseResourceCollection($cruises), 'Cruises retrieved successfully.');
    }

    public function store(StoreCruiseRequest $request, CruiseService $cruiseService): JsonResponse
    {
        $cruise = $cruiseService->apiRegisterCruise($request);
        return $this->sendResponse($cruise, 'Cruise created succesfully.');
    }

    public function show(Cruise $cruise): JsonResponse
    {
        $success = new CruiseResource($cruise);
        return $this->sendResponse($success, 'Cruise showed succesfully.');
    }
}
