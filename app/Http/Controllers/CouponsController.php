<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\Employee;
use App\Coupons;

class CouponsController extends Controller
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
        $coupons = Coupons::all();
        return view('coupons')->with('coupon',$coupons);
    }

    public function insert(Request $req)
    {
        $coupons = Coupons::all();
        $code = $req->input('code',false);
        $discount = $req->input('discount',false);
        $times = $req->input('times',false);
        $expireDate = $req->input('expireDate',false);

        $data = array('code'=>$code,"discount"=>$discount,"times"=>$times,"expireDate"=>$expireDate);

     }
}
