<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $products = Products::all();
        return view('welcome')->with('products',$products);
    }
}
