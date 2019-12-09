<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\AdminController;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Products;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controllers as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\OrderDetails;

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

    public function manageProduct(){
        $emp_num = auth()->user()->employeeNumber;
        $employee = Employee::where('employees.employeeNumber','=',$emp_num)->get();
        $product= Products::all();
        return view('manageProduct') ->with('employees',$employee)->with('products',$product);
    }
    public function insert(Request $req)
    {
        $productCode = $req->input('productCode',false);
        $productName = $req->input('productName',false);
        $productLine = $req->input('productLine',false);
        $productScale = $req->input('productScale',false);
        $quantityInStock = $req->input('quantityInStock',false);
        $buyPrice = $req->input('buyPrice',false);

        $productVendor = $req->input('productVendor',false);
        $productDescription = $req->input('productDescription',false);
        $MSRP = $req->input('MSRP',false);
       
        $data = array('productCode'=>$productCode,"productName"=>$productName,"productLine"=>$productLine,"productScale"=>$productScale,"quantityInStock"=>$quantityInStock,"buyPrice"=>$buyPrice,"productVendor"=>$productVendor,"productDescription"=>$productDescription,"MSRP"=>$MSRP);
        DB::table('products')->insert($data);
        return redirect('admin/manageProduct');
     }

     public function delete($id){

        $products = Products::find($id);
        // $products->delete();
        $deletedRows = Orderdetails::where('productCode', $id)->delete();
        Products::destroy($id);
        return redirect('admin/manageProduct');
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
    public function promote(Request $req,$employee_num){
        $employee = employee::where('employees.employeeNumber',$employee_num) -> first();
        $employee-> jobTitle = $req->input('jobTitle');
        $employee->timestamps = false;
        $employee->save();
        return redirect()->route('admin.erm',auth()->user()->employeeNumber);
    }

}
