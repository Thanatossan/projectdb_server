<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Products;
use App\Customer;
use App\Address;

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
    public function erm($employee_num)
    {
        $login_employee = employee::where('employees.employeeNumber','=',$employee_num)->get();
        $employee= employee::where('employees.reportsTo','=',$employee_num)->get();
        return view('erm')->with('login_employee',$login_employee)->with('employees',$employee);
    }
    public function edit($employee_num){
        $emp_num = auth()->user()->employeeNumber;
        $login_employee = Employee::where('employees.employeeNumber','=',$emp_num)->get();
        $employees = employee::where('employees.employeeNumber','=',$employee_num)->get();
        return view('erm_edit',compact('employees','employee_num'))->with('login_employee',$login_employee);
    }

    public function edit_customer($customer_num){
        $cus_num = auth()->user()->customerNumber;
        $customers = Customer::where('customers.customerNumber','=',$customer_num)->get();
        return view('cus_info')->with('customers',$customers);
    }

    public function address(Request $request){
        $data=$request->all();
        $lastid=Address::create($data)->id;
        if(count($request->addressLine1) > 0)
        {
            foreach($request->addressLine1 as $item=>$v){
                $data2=array(
                    'cutomerNumber'=>$lastid,
                    'addressLine1'=>$request->addressLine1[$item],
                    'addressLine2'=>$request->addressLine2[$item],
                    'city'=>$request->city[$item],
                    'state'=>$request->state[$item],
                    'country'=>$request->country[$item],
                    'postalCode'=>$request->postalCode[$item]
                );
                Address::insert($data2);
            }
        }
        return redirect()->back()->with('success','data insert successfully');
    }

    public function promote(Request $req,$employee_num){
        $employee = employee::where('employees.employeeNumber',$employee_num) -> first();
        $employee-> jobTitle = $req->input('jobTitle');
        $employee->timestamps = false;
        $employee->save();
        return redirect()->route('admin.erm',auth()->user()->employeeNumber);
    }
}
