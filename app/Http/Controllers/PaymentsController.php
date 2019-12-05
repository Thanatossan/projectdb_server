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
        return view('welcome')->with('payments',$payments);
    }
}
