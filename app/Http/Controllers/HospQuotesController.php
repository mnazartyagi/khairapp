<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HospQuote;

class HospQuotesController extends Controller
{
    public function postquote(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'hosp_name'=>'required',
            'number'=>'required',
            'disease_desc'=>'required',
        ]);

        $hospquote= new HospQuote;

        $hospquote->name=$request->input('name');
        $hospquote->email=$request->input('email');
        $hospquote->hosp_name=$request->input('hosp_name');
        $hospquote->number=$request->input('number');
        $hospquote->disease_desc=$request->input('disease_desc');

        $hospquote->save();

        swal()->autoclose(5000)->message(trans('alert.quote'),trans('alert.quotemessage'),'success');

        return redirect()->back();
    }
}
