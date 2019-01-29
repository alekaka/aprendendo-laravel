<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function index() 
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function newu() 
    {
        $restaurants = Restaurant::all();
        return view('admin.menus.store', compact('restaurants'));
    }

    public function store(MenuRequest $request)
    {
        $menuData = $request->all();

        $restaurant = Restaurant::find($menuData['restaurant_id']);
        $restaurant->menus()->create($menuData);

        flash('Menu criado com sucesso!')->success();

        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu) 
    {
        $restaurants = Restaurant::all(['id', 'name']);

        return view('admin.menus.edit', compact('menu', 'restaurants'));
    }

    public function update(MenuRequest $request, $id) 
    {
        $menuData = $request->all();
        //$request->validated();
        
        $menu = Menu::find($id);
        $menu->restaurant()->associate($menuData['restaurant_id']);
        $menu->update($menuData);

        flash('Menu atualizado com sucesso!')->success();

        return redirect()->route('menu.edit', ['menu' => $id]);
    }

    public function delete($id) 
    {   
        $menu = Menu::findOrFail($id);
        $menu->delete();

        flash('Menu removido com sucesso!')->success();

        return redirect()->route('menu.index');
    }
}
