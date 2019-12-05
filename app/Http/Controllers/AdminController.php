<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Products;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $emp_num = auth()->user()->employeeNumber;
        $employee = Employee::where('employees.employeeNumber','=',$emp_num)->get();
        $product= Products::all();
        return view('admin')->with('employees',$employee)->with('products',$product);
    }
}
