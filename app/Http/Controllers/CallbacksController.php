<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Callback;
use Stevebauman\Location\Facades\Location;  

class CallbacksController extends Controller
{
    public function postcallbacks(Request $request)
    {
        $this->validate($request,[
            'number'=>'required:callbacks'
        ]);

        $clientIp=request()->ip();
        $location=Location::get($clientIp)->countryCode;
        $callbacks=new Callback;
        $callbacks->number=$request->input('number');
        $callbacks->location=$clientIp;
        $callbacks->save();

        swal()->autoclose(5000)->message(trans('alert.callback'),trans('alert.callbackmessage'),'success');
        return redirect()->back();
    }
}
