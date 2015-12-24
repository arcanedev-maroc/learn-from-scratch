<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
