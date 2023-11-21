<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function menu()
    {
        return view('front.menu');
    }

    public function menus($slung)
    {
        $Category = Category::where('slung',$slung)->get();
        foreach ($Category as $key => $value) {
            $title = $value->cat;
        }
        $Menu = Menu::where('cat_id',$value->id)->get();
        return view('front.menus', compact('title','Menu'));
    }

    public function delivery(){
        $Terms = DB::table('terms')->get();
        return view('front.delivery', compact('Terms'));
    }

    public function terms(){
        $Terms = DB::table('terms')->get();
        return view('front.terms', compact('Terms'));
    }

    public function privacy(){
        $Terms = DB::table('privacy')->get();
        return view('front.privacy', compact('Terms'));
    }

    public function copyright(){
        $Terms = DB::table('copyright')->get();
        return view('front.copyright', compact('Terms'));
    }
}
