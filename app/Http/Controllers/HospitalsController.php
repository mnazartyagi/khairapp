<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Ambiance;
use Illuminate\Support\Facades\Input;
use App\Treatment;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\HospitalFileUpload;
use App\HospitalUpdate;
use App\NormalUser;

class HospitalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:hospital',['except'=>'gethospitals']);
    }
    public function gethospitals(){

        $ambiances=Ambiance::all();
        $treatments=Treatment::all();

        if (request()->ambiance) {
            $hospitals=Hospital::with('ambiances')->whereHas('ambiances',function($query){
                $query->where('slug',request()->ambiance);
            })->paginate(5);
        }
        else if (request()->treatment) {
            $hospitals=Hospital::with('treatments')->whereHas('treatments',function($query){
                $query->where('slug',request()->treatment);
            })->paginate(5);
        }else {
        $hospitals=Hospital::paginate(4);
        }
        return view('pages.hospitals',compact('hospitals','ambiances','treatments'));        
    }


    public function index()
    {
        return view('hospital.dashboard');
    }

    public function getprofile()
    {
        return view('hospital.profile');
    }

    public function postprofile(Request $request)
    {
        $this->validate($request,[
            'name_en'=>'required',
            'number'=>'required|min:5',
            'ambiance'=>'required',
            'established'=>'required',
            'accreditation'=>'required',
            'treatment'=>'required',
            'nearest_airport'=>'required',
            'description'=>'required',
        ]);

        $hospital=Hospital::where('id',Auth::user()->id);

        $data= array(
            'name_en' => $request->input('name_en'),
            'number'=>$request->input('number'),
            'ambiance' => $request->input('ambiance'),
            'established'=>$request->input('established'),
            'accreditation' => $request->input('accreditation'),
            'treatment'=>$request->input('treatment'),
            'nearest_airport' => $request->input('nearest_airport'),
            'description'=>$request->input('description'),
            );

        $hospital->update($data);
        
        swal()->autoclose(5000)->message('Profile updated','','success');
        return redirect()->back();
    }

    public function getdocuments()
    {
        $documents=HospitalFileUpload::where('hospital_id',Auth::user()->id)->get();

        return view('hospital.documents')->with('documents',$documents);
    }

    public function postdocuments(Request $request)
    {
        $this->validate($request,[
            'documents'=>'required',
        ]);

        if ($request->hasFile('documents')) {
            $allowedextensions=['pdf','jpg','doc','docx','jpeg'];
            $files=$request->file('documents');
            foreach ($files as $file) {
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension,$allowedextensions);
                if ($check) {
                        $url=$file->store('documents/Hospital/'.Auth::user()->name_en);
                        HospitalFileUpload::create([
                            'hospital_id'=>Auth::user()->id,
                            'hospital_email'=>Auth::user()->email,
                            'filename'=>$url,
                            'file'=>$filename,
                        ]);
                    swal()->autoclose(5000)->message('Files uploaded','','success');
                }
                else{
                    swal()->autoclose(5000)->message('Files not uploaded','','error');
                }
            }
        }
        return redirect()->back();
    }

    public function deletedocuments($id)
    {
        $document=HospitalFileUpload::find($id);
        if (Auth::user()->id!=$document->hospital_id) {
            swal()->autoclose(5000)->message('Not Authorized','','error');
            return redirect()->back();
        }
        Storage::delete($document->filename);
        $document->delete();

        swal()->autoclose(5000)->message('Documents Deleted','','success');
        return redirect()->back();
    }

    public function getupdates()
    {
        $documents=Hospitalupdate::where('hospital_id',Auth::user()->id)->get();
        return view('hospital.updates')->with('documents',$documents);
    }

    public function postupdates(Request $request)
    {
        $this->validate($request,[
            'update'=>'required',
            'document'=>'nullable|file',
        ]);

        if ($request->hasFile('document')) {
            $allowedextensions=['pdf','jpg','doc','docx','jpeg'];
            $file=$request->file('document');
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension,$allowedextensions);
                if ($check) {
                        $url=$file->store('documents/Hospital/'.Auth::user()->name_en);
                        HospitalUpdate::create([
                            'hospital_id'=>Auth::user()->id,
                            'hospital_email'=>Auth::user()->email,
                            'filename'=>$url,
                            'update'=>$request->input('update'),
                        ]);
                    swal()->autoclose(5000)->message('Update successful','','success');
                }
                else{
                    swal()->autoclose(5000)->message('Update Unsuccessful','','error');
                }
                return redirect()->back();
        }else{
            HospitalUpdate::create([
                'hospital_id'=>Auth::user()->id,
                'hospital_email'=>Auth::user()->email,
                'update'=>$request->input('update'),
            ]);
            swal()->autoclose(5000)->message('Update successful','','success');
            return redirect()->back();
        }
    }
}
