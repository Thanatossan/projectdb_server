<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payments;

use App\Products;
use App\Orders;

class PaymentsController extends Controller
{
    public function index($orderNumber){
        $orders = Orders::where('orderNumber',$orderNumber)->get();
        $payments = Payments::all();
        return view('payments')->with('payments',$payments)->with('orders',$orders);
    }

    public function insert(Request $req,$orderNumber){

        $customerNumber = $req->input('customerNumber');
        $checkNumber = $req->input('checkNumber');
        $paymentDate = $req->input('paymentDate');
        $amount = $req->input('amount');
        
        $data = array('customerNumber'=>$customerNumber,"checkNumber"=>$checkNumber,"paymentDate"=>$paymentDate,"amount"=>$amount);
        
        /*$quantityInStock = Products::where('products.productCode', $req->input('productCode'))->first();
         if ($quantityInStock <= $amount) {
            $status = Orders::where('orders.orderNumber', $req->input('orderNumber'))->first();
            $status = 'shipped';
            //$status->save();
         }
        */

        Payments::insert($data);

        $orders = Orders::where('orders.orderNumber',$orderNumber)->first();
        $orders ->status = "shipped";
        $orders->timestamps = false;
        $orders->save();

        return redirect('admin/status');
    }
}
