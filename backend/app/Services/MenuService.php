<?php

namespace App\Services;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuService
{
    public function createMenu(Request $request): Menu
    {
        $menu = new Menu();
        $menu->name = $request->menu_name;
        $menu->restaurant_id = $request->idh;
        $menu->save();

        return $menu;
    }
}
