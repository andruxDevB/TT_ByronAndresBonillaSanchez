<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function store(StoreMenuRequest $request, MenuService $menuService)
    {
        $menuService->createMenu($request);
        return redirect()->back()->with('status', 'New menu registered successfully.');
    }
}
