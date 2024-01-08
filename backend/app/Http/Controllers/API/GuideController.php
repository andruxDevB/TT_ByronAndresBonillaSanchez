<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\StoreGuideRequest;
use App\Http\Resources\GuideResource;
use App\Http\Resources\GuideResourceCollection;
use App\Models\Guide;
use App\Services\GuideService;
use Illuminate\Http\JsonResponse;

class GuideController extends BaseController
{
    public function index(): JsonResponse
    {
        $guides = Guide::all();
        return $this->sendResponse(new GuideResourceCollection($guides), 'Guides retrieved successfully.');
    }

    public function store(StoreGuideRequest $request, GuideService $guideService): JsonResponse
    {
        $guide = $guideService->apiRegisterGuide($request);
        return $this->sendResponse($guide, 'Guide created succesfully.');
    }

    public function show(Guide $guide): JsonResponse
    {
        $success = new GuideResource($guide);
        return $this->sendResponse($success, 'Guide showed succesfully.');
    }
}
