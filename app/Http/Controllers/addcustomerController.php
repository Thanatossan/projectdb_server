<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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
        $customerNumber = $req->input('customerNumber',true);
        $contactFirstName = $req->input('contactFirstName',false);
        $contactLastName = $req->input('contactLastName',false);
        $phone = $req->input('phone',false);
        $customerName = $req->input('customerName',false);
        $addressLine1 = $req->input('addressLine1',false);
        $addressLine2 = $req->input('addressLine2',true);
        $city = $req->input('city',false);
        $state = $req->input('state',true);
        $country = $req->input('country',false);
        $postalCode = $req->input('postalCode',true);

        $user_id = $req->input('user_id',false);
        // $salesRepEmployeeNumber = $req->input('salesRepEmployeeNumber');
        // $creditLimit = $req->input('creditLimit');

        $data = array('customerNumber'=>$customerNumber,"contactFirstName"=>$contactFirstName,"contactLastName"=>$contactLastName,"phone"=>$phone,"customerName"=>$customerName,"addressLine1"=>$addressLine1,"addressLine2"=>$addressLine2,"city"=>$city,"state"=>$state,"country"=>$country,"postalCode"=>$postalCode,"user_id"=>$user_id);
        // ,"user_id"=>$user_id,"salesRepEmployeeNumber"=>$salesRepEmployeeNumber,"creditLimit"=>$creditLimit

        DB::table('customers')->insert($data);


        return redirect('admin/manage');

     }
}
