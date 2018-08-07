<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\NormalUser;
use Auth;
use App\UserFileUpload;
use App\TreatmentPlans;
use App\PatientRequest;
use App\Hospital;

class NormalUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:normal_user');
    }
    
    public function viewtreatments()
    {
        $plans=TreatmentPlans::where('normal_user_id',Auth::user()->id)->get();

        return view('normal_user.treatment_plans')->with('plans',$plans);
    }

    public function getprofile()
    {
        $hospitals=Hospital::all();
        return view('normal_user.profile')->with('hospitals',$hospitals);
    }


    public function postprofile(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:5'
        ]);

        $normal_user=NormalUser::where('id',Auth::user()->id);
        $data= array(
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'phone' => $request->input('phone'),
            );
        $normal_user->update($data);
        
        swal()->autoclose(5000)->message(trans('alert.profile'),'','success');
        return redirect()->back();
    }

    public function getdocuments()
    {
        $documents=UserFileUpload::where('normal_user_id',Auth::user()->id)->get();

        return view('normal_user.documents')->with('documents',$documents);
    }

    public function postdocuments(Request $request)
    {
        $this->validate($request,[
            'file-desc'=>'required',
            'documents'=>'required',
        ]);

        if ($request->hasFile('documents')) {
            $allowedextensions=['pdf','jpg','doc','docx','jpeg'];
            $files=$request->file('documents');
            $normal_user=NormalUser::where('id',Auth::user()->id);
            $data=['file_desc'=>$request->input('file-desc')];
            $normal_user->update($data);
            foreach ($files as $file) {
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension,$allowedextensions);
                if ($check) {
                        $url=$file->store('documents/NormalUser/'.Auth::user()->name);
                        UserFileUpload::create([
                            'normal_user_id'=>Auth::user()->id,
                            'user_email'=>Auth::user()->email,
                            'filename'=>$url,
                            'file'=>$filename,
                        ]);
                    swal()->autoclose(5000)->message(trans('alert.filesuccess'),'','success');
                }
                else{
                    swal()->autoclose(5000)->message(trans('alert.fileerror'),trans('alert.fileerrormessage'),'error');
                }
            }
        }
        return redirect()->back();
    }

    public function deletedocuments($id)
    {
        $document=UserFileUpload::find($id);
        if (Auth::user()->id!=$document->normal_user_id) {
            swal()->autoclose(5000)->message('Not Authorized','','error');
            return redirect()->back();
        }
        Storage::delete($document->filename);
        $document->delete();

        swal()->autoclose(5000)->message(trans('alert.document'),'','success');
        return redirect()->back();
    }

    public function postrequests(Request $request)
    {
        $this->validate($request,[
            'patient_name'=>'required',
            'country'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'complaints_history'=>'required',
            'treatment_type'=>'required',
        ]);

        $patient_request=new PatientRequest;
        $patient_request->normal_user_id=Auth::user()->id;
        $patient_request->normal_user_email=Auth::user()->email;
        $patient_request->patient_name=$request->input('patient_name');
        $patient_request->gender=$request->input('gender');
        $patient_request->dob=$request->input('dob');
        $patient_request->country=$request->input('country');
        $patient_request->height=$request->input('height');
        $patient_request->weight=$request->input('weight');
        $patient_request->body_structure=$request->input('body_structure');
        $patient_request->complaints_history=$request->input('complaints_history');
        $patient_request->investigation_details=$request->input('investigation_details');
        $patient_request->treatment_details=$request->input('treatment_details');
        $patient_request->current_medication=$request->input('current_medication');
        $patient_request->allergies=$request->input('allergies');
        if ($request->input('allergies')=='1') {
            $patient_request->allergy_detail=$request->input('allergy_detail');
        }
        $patient_request->appetite=$request->input('appetite');
        $patient_request->bowel_habits=$request->input('bowel_habits');
        $patient_request->urine_quantity=$request->input('urine_quantity');
        $patient_request->sleep=$request->input('sleep');
        $patient_request->prefered_hospital=$request->input('prefered_hospital');
        if ($request->input('prefered_hospital')=='1') {
            $patient_request->hospital_name=$request->input('hospital_name');
        }
        $patient_request->treatment_type=$request->input('treatment_type');
        $patient_request->liesure_tour=$request->input('liesure_tour');
        if ($request->input('liesure_tour')=='1') {
            $patient_request->accomodation=$request->input('accomodation');
            $patient_request->no_of_adult=$request->input('no-of-adults');
            $patient_request->no_of_child=$request->input('no-of-child');
            $patient_request->no_of_days=$request->input('pass_no');
        }
        $patient_request->personel_chef=$request->input('personal_chef');
        if ($request->input('personal_chef')=='1') {
            $patient_request->chef_type=$request->input('chef-type');
        }
        $patient_request->bystander=$request->input('bystander');
        if ($request->input('bystander')=='1') {
            $patient_request->bystander_type=$request->input('bystander-type');
        }
        $patient_request->interpreter=$request->input('interpreter');

        $patient_request->save();

        if ($request->hasFile('documents')) {
            $allowedextensions=['pdf','jpg','doc','docx','jpeg'];
            $files=$request->file('documents');
            foreach ($files as $file) {
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension,$allowedextensions);
                if ($check) {
                        $url=$file->store('documents/NormalUser/'.Auth::user()->name);
                        UserFileUpload::create([
                            'normal_user_id'=>Auth::user()->id,
                            'user_email'=>Auth::user()->email,
                            'filename'=>$url,
                            'file'=>$filename,
                        ]);
                    swal()->autoclose(5000)->message(trans('alert.filesuccess'),'','success');
                }
            }
        }
        
        swal()->autoclose(5000)->message(trans('alert.callback'),trans('alert.callbackmessage'),'success');
        return redirect()->back();
    }

}
