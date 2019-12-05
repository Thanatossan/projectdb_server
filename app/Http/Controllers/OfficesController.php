<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Offices;

class OfficesController extends Controller
{
    public function index(){
        $offices = Offices::all();
        return view('welcome')->with('offices',$offices);
    }
}
