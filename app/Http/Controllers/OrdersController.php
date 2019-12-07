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

        // $this->validate($req, [
        //     'shippedDate'   => 'required',
        //     'status'        => 'required',
        //     'comments'      => 'required' 
        // ]);

        $orders = Orders::where('orders.orderNumber','=',$orderNumber)->get();
        $shippedDate = $req->input('shippedDate');
        $status = $req->input('status');
        $comments = $req->input('comments');

        $data = array('shippedDate'=>$shippedDate,'status'=>$status,'comments'=>$comments);

        /*
            $customerNumber = $req->input('customerNumber');
        $checkNumber = $req->input('checkNumber');
        $paymentDate = $req->input('paymentDate');
        $amount = $req->input('amount');
        
        $data = array('customerNumber'=>$customerNumber,"checkNumber"=>$checkNumber,"paymentDate"=>$paymentDate,"amount"=>$amount);
        */
        Orders::insert($data);
        return redirect('status');
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
        // return $customerNumber = Customer::pluck('customerNumber');

        
        
        $data = array('orderNumber'=>$orderNumber,'orderDate'=>$shippedDate,'requiredDate'=>$shippedDate,
        'shippedDate'=>$shippedDate,"status"=>$status,"comments"=>$comments,'customerNumber'=>$customerNumber,'customerNumber'=>$customerNumber);
        Orders::insert($data);

        return view('payments',$data);
        // return $data;
    }
}
