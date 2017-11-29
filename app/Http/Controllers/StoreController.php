<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use DB;





class StoreController extends Controller
{
    public function index(){
      $products = Producto::all();
      return view('store.index', compact('products'));

    }
    
    public function show($slug)
    {
      $product = Producto::where('slug',$slug)->first();
      return view('store.show', compact('product'));
    }
}
