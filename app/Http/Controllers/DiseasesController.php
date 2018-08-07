<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;
use App\Dcategory;
use App;

class DiseasesController extends Controller
{
    public function getdiseases(){

        if (request()->dcategory) {
            $diseases=Disease::with('dcategories')->whereHas('dcategories',function($query){
                $query->where('slug',request()->dcategory);
            })->get()->sortBy('name_en');
            $dcategories=Dcategory::all()->sortBy('name_en');
            if (App::getLocale()=='en') {
                $categoryName=optional($dcategories->where('slug',request()->dcategory)->first())->name_en;
            }else{
                $categoryName=optional($dcategories->where('slug',request()->dcategory)->first())->name_ar;
            }

            $categoryicon=optional($dcategories->where('slug',request()->dcategory)->first())->icon;
            $all=trans('home.alldiseas');
        }
        else{
        $diseases=Disease::all()->sortBy('name_en');
        $dcategories=Dcategory::all()->sortBy('name_en');
        $categoryName=trans('home.alldiseas');
        $all='';
        $categoryicon='medical-icon-i-health-services';
        }

        return view('pages.diseases',compact('diseases','dcategories','categoryName','all','categoryicon'));
    }

    public function viewdiseases($slug){
        $disease=Disease::where('slug',$slug)->firstOrFail();

        return view('diseases.view_diseases')->with('disease',$disease);
    }
}
