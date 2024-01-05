<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuideRequest;
use App\Http\Requests\UpdateGuideRequest;
use App\Models\Guide;
use App\Models\GuideDriverProfile;
use App\Services\GuideService;
use Illuminate\Http\RedirectResponse;
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
        return view('guides.create');
    }

    public function store(StoreGuideRequest $request, GuideService $guideService): RedirectResponse
    {
        $guideService->createGuide($request);
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

    public function update(UpdateGuideRequest $request, GuideService $guideService, Guide $guide)
    {
        $guideService->updateGuide($request, $guide);
        return to_route('guides.index')->with('status', 'Guide profile updated successfully');
    }
}
