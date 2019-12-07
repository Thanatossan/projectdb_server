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

    public function edit($orderNumber){
        // $orders = Orders::find($orderNumber);
        $customer = Customer::all();
        $orders = Orders::where('orders.orderNumber','=',$orderNumber)->get();
        return view('statusedit', compact('orders','orderNumber'))->with('customers',$customer);
    }

    public function update(Request $req, $orderNumber){

        $this->validate($req, [
            'shippedDate'   => 'required',
            'status'        => 'required',
            'comments'      => 'required' 
        ]);

        $orders = Orders::where('orders.orderNumber','=',$orderNumber)->get();
        $orders->shippedDate = $req->get('shippedDate');
        $orders->status = $req->get('status');
        $orders->comments = $req->get('comments');

        $orders->save();
        return view('status')->with('success', 'Data Update')->with('orders',$orders);
    }
}
