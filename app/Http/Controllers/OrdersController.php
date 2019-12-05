<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orders;

class OrdersController extends Controller
{
    public function index(){
        $orders = Orders::all();
        return view('welcome')->with('orders',$orders);
    }
}
