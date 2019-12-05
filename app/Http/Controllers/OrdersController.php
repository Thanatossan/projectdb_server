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
        //return $customer = Customer::where('customerNumber', '=', $orders->customerNumber);
        $customer = Customer::all();
        //$orders_customers = Orders::all()->join('customers','orders.customerNumber','=','customers.customerNumber');
        return view('status')->with('orders',$orders)->with('customers',$customer);
    }
}
