<?php

namespace App\Http\Controllers;
use App\Consultation;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function postConsultation(Request $request)
    {
        $this->validate($request,[
            'name'=>'required:consultations',
            'email'=>'required:consultations|email',
            'phone'=>'required:consultations',
            'description'=>'required:consultations',
            'country' => 'required'
        ]);

        $consultation=new Consultation;
        $consultation->name=$request->input('name');
        $consultation->email=$request->input('email');
        $consultation->phone=$request->input('phone');
        $consultation->description=$request->input('description');
        $consultation->country=$request->input('country');
        $consultation->save();
       
        swal()->autoclose(5000)->message(trans('alert.consult'),trans('alert.consultmessage'),'success');
        return redirect()->back();
    }
}
