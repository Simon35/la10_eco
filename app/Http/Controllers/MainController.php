<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        //echo "test index";
        $p = Produit::all();
        //dd($p);
        $categories = Category::where('is_online', 1)->get();
        return view('index', compact('p','categories'));
    }

    public function single(Request $request){

        echo "test single";
        $p = Produit::find($request->id);
        //dd($p);
        $categories = Category::where('is_online', 1)->get();
        return view('single',compact('p','categories'));
    }

    public function viewByCategory(){

        $categories = Category::where('is_online', 1)->get();

        // dd($categories);
        return view('categories', compact('categories'));
    }
}
