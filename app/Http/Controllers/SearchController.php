<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;
use App\Package;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'query'=>'required|min:2'
        ]);

        $query=$request->input('query');
        $diseases=Disease::search($query)->with('dcategories')->get();
        $packages=Package::search($query)->get();

        return view('pages.search-results',compact('diseases','packages'));
    }
}
