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

        $orders = Orders::where('orders.orderNumber',$orderNumber)->first();
        // return $orders = Orders::find($orderNumber);
        $orders ->orderDate = $req->input('orderDate');
        $orders ->requiredDate = $req->input('requiredDate');
        $orders ->orderNumber = $req->input('orderNumber');
        $orders ->shippedDate = $req->input('shippedDate');
        $orders ->status = $req->input('status');
        $orders ->comments = $req->input('comments');
        $orders ->customerNumber = $req->input('customerNumber');

        // $data = array('orderNumber'=>$orderNumber,'orderDate'=>$orderDate,'requiredDate'=>$requiredDate,
        //                'shippedDate'=>$shippedDate, 'status'=>$status, 'comments'=>$comments, 'customerNumber'=>$customerNumber);
        
        // $orderDate = $req->input('orderDate');
        // $orders->requiredDate = $req->input('requiredDate');
        // $orders->orderNumber = $req->input('orderNumber');
        // $orders->shippedDate = $req->input('shippedDate');
        // $orders->status = $req->input('status');
        // $orders->comments = $req->input('comments');
        // $orders->customerNumber = $req->input('customerNumber');
        $orders->timestamps = false;
        $orders->save();

        return redirect('admin/status');
    }

    public function insert(Request $req){
        $orderNumber = Orders::max('orderNumber')+1;
        // $orderDate
        // $requiredDate
        $customerName = $req->input('customerName');
        $shippedDate = $req->input('shippedDate');
        $status = "in-process";
        $comments = $req->input('comments');
        $customerNumber = Customer::where('customers.customerName','=',$customerName)->max('customerNumber');        
        
        $data = array('orderNumber'=>$orderNumber,'orderDate'=>$shippedDate,'requiredDate'=>$shippedDate,
        'shippedDate'=>$shippedDate,"status"=>$status,"comments"=>$comments,'customerNumber'=>$customerNumber,'customerNumber'=>$customerNumber);
        Orders::insert($data);

        return view('payments',$data);
        // return $data;
    }
}
