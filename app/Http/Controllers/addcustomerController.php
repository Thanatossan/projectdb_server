<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class addcustomerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
        return view('addcustomer');
    }

    public function insert(Request $req)
    {
        $customerNumber = $req->input('customerNumber');
        $contactFirstName = $req->input('contactFirstName');
        $contactLastName = $req->input('contactLastName');
        $phone = $req->input('phone');
        $customerName = $req->input('customerName');
        $addressLine1 = $req->input('addressLine1');
        $addressLine2 = $req->input('addressLine2');
        $city = $req->input('city');
        $state = $req->input('state');
        $country = $req->input('country');
        $postalCode = $req->input('postalCode');

        $data = array("customerNumber"=>$customerNumber,"contactFirstName"=>$contactFirstName,"contactLastName"=>$contactLastName,"phone"=>$phone,"customerName"=>$customerName,"addressLine1"=>$addressLine1,"addressLine2",$addressLine2,"city"=>$city,"state"=>$state,"country"=>$country,"postalCode"=>$postalCode);

        DB::table('customers')->insert($data);

        echo "inserted successfully";
     }
}
