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
        $customerNumber = $req->input('customerNumber',true);
        $checkNumber = $req->input('checkNumber',false);
        $paymentDate = $req->input('paymentDate',true);
        $amount = $req->input('amount',true);
        
        $data = array('customerNumber'=>$customerNumber,"checkNumber"=>$checkNumber,"paymentDate"=>$paymentDate,"amount"=>$amount);

        DB::table('payments')->insert($data);

        return view('status');
    }
}
