<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payments;

class PaymentsController extends Controller
{
    public function index(){
        $payments = Payments::all();
        return view('payments')->with('payments',$payments);
    }

    public function insert(Request $req){
        $customerNumber = $req->input('customerNumber');
        $checkNumber = $req->input('checkNumber');
        $paymentDate = $req->input('paymentDate');
        $amount = $req->input('amount');
        
        $data = array('customerNumber'=>$customerNumber,"checkNumber"=>$checkNumber,"paymentDate"=>$paymentDate,"amount"=>$amount);

        Payments::insert($data);
        return redirect('admin/status');
    }
}
