<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Resources\DriverResourceCollection;
use App\Models\Driver;
use App\Services\DriverService;
use App\Http\Resources\DriverResource;
use Illuminate\Http\JsonResponse;

class DriverController extends BaseController
{
    public function index(): JsonResponse
    {
        $driver = Driver::all();
        return $this->sendResponse(new DriverResourceCollection($driver), 'Driver retrieved successfully.');
    }

    public function store(StoreDriverRequest $request, DriverService $driverService): JsonResponse
    {
        $driver = $driverService->apiRegisterDriver($request);
        return $this->sendResponse($driver, 'Driver created succesfully.');
    }

    public function show(Driver $driver): JsonResponse
    {
        $success = new DriverResource($driver);
        return $this->sendResponse($success, 'Driver showed succesfully.');
    }
}
