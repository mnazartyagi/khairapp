<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackagesController extends Controller
{
    public function packages()
    {
        $packages=Package::orderBy('updated_at','desc')->paginate(9);
        return view('pages.packages',compact('packages'));
    }

    public function view_packages($slug)
    {
        $package=Package::where('slug',$slug)->firstOrFail();

        return view('packages.view_packages')->with('package',$package);
    }
}
