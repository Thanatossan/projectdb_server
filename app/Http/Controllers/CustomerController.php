<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        //$id = auth()->user()->id;
        // $user = DB::table('users')->get();

        $customer = Customer::all();

        return view('manage')->with('customers',$customer);
    }

    
}
