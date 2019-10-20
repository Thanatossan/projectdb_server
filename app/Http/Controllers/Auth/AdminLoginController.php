<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
        // $em_numv=employeeNumber::findOrFail($id);
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'employeeNumber' => 'required|min:4',
            'password' => 'required|min:8'
        ]);

    //     $loginValue = $request->input('employeeNumber');
    //     $login_type = $this->getLoginType($loginValue);
    //     $request->merge([
    //         $login_type => $loginValue
    //     ]);

    //     if (Auth::attempt($request->only($login_type, 'password'))) {
    //         return redirect()->intended($this->redirectPath());
    //     }

    //     return redirect()->back()->withInput()->withErrors([ 'employeeNumber' => "These credentials do not match our records." 
    //     ]);
    // }

    //     public function getLoginType($loginValue) {
    //         return filter_var($loginValue, FILTER_VALIDATE_EMAIL ) ? 'employeeNumber'
    //             : ( (preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\/]?){0,})(?:[\-\.\ \\/]?(?:#|ext\.?|extension|x)[\-\.\ \\/]?(\d+))?$%i', $loginValue)) ? 'employeeNumber' : 'username' );


        if (Auth::guard('admin')->attempt(['employeeNumber' => $request->employeeNumber, 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('employeeNumber', 'remrmber'));
    }
}
