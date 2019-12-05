<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrderDetails;

class OrderDetailsController extends Controller
{
    public function index(){
        $orderDetails = OrderDetails::all();
        return view('welcome')->with('orderDetails',$orderDetails);
    }
}
