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
}
