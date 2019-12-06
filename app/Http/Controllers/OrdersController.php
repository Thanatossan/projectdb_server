<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orders;
use App\Customer;

class OrdersController extends Controller
{
    public function index(){
        $orders = Orders::all();
        $customer = Customer::all();
        return view('status')->with('orders',$orders)->with('customers',$customer);
    }

    public function create(){
        $orders = Orders::max('orderNumber');
        $customer = Customer::all();
        return view('addstatus')->with('orders',$orders)->with('customers',$customer);
    }

    public function insert(Request $req){
        
    }
}
