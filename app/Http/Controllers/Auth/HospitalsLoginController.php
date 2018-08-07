<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HospitalsLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:hospital',['except'=>'logout']);
    }

    public function getlogin()
    {
        return view('hospital.login');
    }

    public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::guard('hospital')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
            swal()->autoclose(5000)->message('Login Successful','Welcome Hospital','success');
            return redirect()->route('hospital.dashboard');
        }
        
        swal()->autoclose(5000)->message('Login Unsuccessful','Please Enter Correct details','error');
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    
    public function logout(){
        Auth::guard('hospital')->logout();
        swal()->autoclose(5000)->message('Successfully Logged Out','','success');
        return redirect()->route('home');
    }
}
