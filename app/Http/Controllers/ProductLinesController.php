<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ProductsLines;

class ProductLinesController extends Controller
{
    public function index(){
        $productsLines = ProductsLines::all();
        return view('welcome')->with('productsLines',$productsLines);
    }
    
}
