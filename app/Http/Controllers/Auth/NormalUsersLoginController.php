<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\NormalUser;
use Mail;
use App\Mail\UserSignup;
use Validator;

class NormalUsersLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:normal_user',['except'=>'logout']);
    }

    public function getlogin()
    {
        return view('normal_user.login');
    }

    public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::guard('normal_user')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
            swal()->autoclose(5000)->message(trans('alert.loginsuccess'),trans('alert.signupmessage'),'success');
            return redirect()->route('normal_user.getprofile');
        }
        
        swal()->autoclose(5000)->message(trans('alert.loginerror'),trans('alert.loginmessage'),'error');
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function getsignup()
    {
        return view('normal_user.signup');
    }

    public function postsignup(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:normal_users,email',
            'number'=>'required|unique:normal_users,phone',
            'password'=>'required',
            'password_confirm'=>'required|min:4|max:20|same:password',
        ]);
        $normaluser=new NormalUser;
        $normaluser->email=$request->input('email');
        $normaluser->name=$request->input('name');
        $normaluser->phone=$request->input('number');
        $normaluser->password=bcrypt($request->input('password'));
        $normaluser->save();

        Mail::send(new UserSignup($normaluser));
        
        Auth::guard('normal_user')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember);
            swal()->autoclose(5000)->message(trans('alert.signup'),trans('alert.signupmessage'),'success');
        return redirect()->route('normal_user.getprofile');

    }
    
    public function logout(){
        Auth::guard('normal_user')->logout();
        swal()->autoclose(5000)->message(trans('alert.logout'),'','success');
        return redirect()->route('home');
    }
}
