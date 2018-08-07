<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Dcategory;
use App;

class BlogsController extends Controller
{
    
    public function getblogs(){
        
        $dcategories=Dcategory::all();

        if (request()->dcategory) {
            $blogs=Blog::with('dcategories')->whereHas('dcategories',function($query){
                $query->where('slug',request()->dcategory);
            })->orderBy('updated_at','desc')->paginate(5);
            if (App::getLocale()=='en') {
            $categoryName=optional($dcategories->where('slug',request()->dcategory)->first())->name_en;
            $cnameprefix='Blogs related to:';
            }elseif(App::getLocale()=='ar'){
            $categoryName=optional($dcategories->where('slug',request()->dcategory)->first())->name_ar;
            $cnameprefix='المدونات ذات الصلة بـ:';
            }
            
            $all=trans('home.alldiseas');
        }
        else{
        $blogs=Blog::orderBy('updated_at','desc')->paginate(5);
        if (App::getLocale()=='en') {
            $categoryName='All Blogs';
        }else{
            $categoryName='كل المدونات';
        }
        $cnameprefix='';
        $all='';
        }
    
        return view('pages.blogs',compact('blogs','dcategories','categoryName','cnameprefix','all'));
    }
    public function viewblog($slug){
        
        $blog=Blog::where('slug',$slug)->firstOrFail();
        $dcategories=Dcategory::all();

        return view('blog.viewblog',compact('blog','dcategories'));
    }
}
