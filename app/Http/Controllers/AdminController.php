<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\AdminController;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Products;

use App\Customer;
use App\Address;
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

    public function edit_customer($customer_num){
        $customers = Address::where('addresses.customerNumber','=',$customer_num)->get();
        $customer_table = Customer::where('customers.customerNumber','=',$customer_num)->get();
        return view('cus_info')->with('customers',$customers)->with('customer_tables',$customer_table);
    }

    public function address(Request $req,$customer_num){
        $addressNumber = Address::where('addresses.customerNumber',$customer_num)->max("addressNumber")+1;
        $addressLine1 = $req->input('addressline1',false);
        $addressLine2 = $req->input('addressline2',false);
        $city = $req ->input('city',false);
        $state =$req -> input('state',false);
        $postalCode = $req-> input('postalcode',false);
        $country= $req-> input('country',false);
        $data = array('addressNumber'=>$addressNumber,"customerNumber"=>$customer_num,"addressLine1"=>$addressLine1,"addressLine2"=>$addressLine2,"city"=>$city,"state"=>$state,"postalCode"=>$postalCode,"country"=>$country);
        DB::table('addresses')->insert($data);
        return redirect()->route('admin.cus.edit',$customer_num);
    }
    public function deleteAddress($addressNumber,$customer_num){
        
        // return $customer_num;
        // return $addressNumber;
        $addresses_num = Address::where('addresses.addressNumber');
        $addresses = $addresses_num -> find($addressNumber);
      
        $addresses->delete();
        // return Address::find(1)->delete();
        return redirect()->route('admin.cus.edit',$customer_num);
    }

    public function promote(Request $req,$employee_num){
        $employee = employee::where('employees.employeeNumber',$employee_num) -> first();
        $employee-> jobTitle = $req->input('jobTitle');
        $employee->timestamps = false;
        $employee->save();
        return redirect()->route('admin.erm',auth()->user()->employeeNumber);
    }
    public function editProduct($Product_num){
        $products = products::where('products.productCode',$Product_num) -> first();
        return view('product_edit',compact('products','Product_num'));
    }
    public function updateProduct(Request $req,$Product_num){
        $products = products::where('products.productCode',$Product_num) -> first();
        // $products-> jobTitle = $req->input('jobTitle');
        $products->productName = $req-> Input('productName');
       
        $products->productScale = $req-> Input('productScale');
        $products->productVendor = $req-> Input('productVendor');
        $products->quantityInStock = $req-> Input('quantityInStock');
        $products->buyPrice = $req-> Input('buyPrice');
        $products->timestamps = false;

        $products->save();
        return redirect()->route('admin.mant.product');
    }
}
