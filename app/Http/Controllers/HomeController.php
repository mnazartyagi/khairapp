<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use App\Package;
use App\News;
use App\Offer;

class HomeController extends Controller
{
    
    public function index()
    {
        $offers=Offer::orderByDesc('updated_at')->get();
        $packages=Package::orderByDesc('updated_at')->paginate(8);
        $news=News::orderByDesc('updated_at')->paginate(4);
        return view('home',compact('packages','news','offers'));
    }

    public function how_works()
    {
        return view('pages.how_works');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function postcontacts(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $contact=new ContactUs;
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save();

        swal()->autoclose(5000)->message(trans('alert.consult'),trans('alert.consultmessage'),'success');
        return redirect()->back();
    }

}
