<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Vender;

class MainController extends Controller
{
    function index()
    {
        $categories = Category::select('id', 'name', 'image')->get();
        $subCategories = SubCategory::where('user_type_id', '=', 3)->take(4)->get();
        $menCategories  = SubCategory::where('user_type_id', '=', 2)->take(4)->get();
        $brands = Vender::take(3)->get();
        return inertia('Home', compact('categories', 'subCategories', 'menCategories', 'brands'));
    }

    function men()
    {
        return inertia('Men');
    }

    function women()
    {
        return inertia('Women');
    }
}
