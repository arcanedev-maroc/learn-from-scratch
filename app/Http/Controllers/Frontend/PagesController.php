<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $topics = \App\Models\Topic::all();
        return view('frontend.home',compact('topics', $topics));
    }
}
