<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::paginate(6);
        return view('pages.news')->with('news',$news);
    }

    public function view_news($slug)
    {
        $news=News::where('slug',$slug)->firstOrFail();

        return view('news.view_news')->with('news', $news);
    }
}
