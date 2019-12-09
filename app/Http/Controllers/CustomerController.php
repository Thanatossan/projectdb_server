<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        // $id = auth()->user()->id;
        // $user = DB::table('users')->get();

        // $customer = DB::table('customers')
        // ->where('user_id','=',$id)
        // ->get();
        $customer = Customer::all();
        return view('manage')->with('customers',$customer);
    }
}
