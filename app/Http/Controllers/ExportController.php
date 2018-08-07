<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\PatientRequest;
use Mail;
use App\Mail\SendToHospital;
use App\UserFileUpload;

class ExportController extends Controller
{
    public function exportpatient($id)
    {
        $data=PatientRequest::where('id',$id)->firstOrFail();
        $pdf=PDF::loadView('normal_user.export',compact('data'))->setPaper('a4', 'portrait');
        
        return $pdf->download($data->patient_name.'.pdf');
    }
    public function send_to_hospital(Request $request,$id)
    {
        $data=PatientRequest::where('id',$id)->firstOrFail();
        $documents=UserFileUpload::where('normal_user_id',$data->normal_user_id)->get();

        if ($request->input('hosp_name')) {
            $tomail=$request->input('hosp_name');
        }elseif($request->input('hosp_name2')){
            $tomail=$request->input('hosp_name2');
        }
        else{
            return redirect()->back();
        }
        Mail::send(new SendToHospital($data,$tomail,$documents));
        return redirect()->back();
    }
}
