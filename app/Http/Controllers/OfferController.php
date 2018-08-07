<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    public function show()
    {
        return view('offer.offer');
    }

    public function view_offer($slug)
    {
        $offer=Offer::where('slug',$slug)->firstOrFail();

        return view('offer.offer')->with('offer', $offer);
    }

    public function book($slug)
    {
        $offer=Offer::where('slug',$slug)->firstOrFail();

        return view('offer.book')->with('offer', $offer);
    }
}
