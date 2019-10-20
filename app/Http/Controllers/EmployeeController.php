<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        // $id = auth()->user()->id;
        $admin = DB::table('admins')->get();

        $employee = DB::table('employees')
        ->join('admins','employees.employeeNumber','=','admins.employeeNumber')
        ->get();

        return view('admin')->with('employees',$employee);
    }
}
