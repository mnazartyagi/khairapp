<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App;

class LanguageController extends Controller
{
    public function choose()
    {
    		if (!\Session::has('locale')) {
    			\Session::put('locale',Input::get('locale'));
    		}else{
    			Session::put('locale',Input::get('locale'));
    		}

    		return redirect()->back();
    }
}
