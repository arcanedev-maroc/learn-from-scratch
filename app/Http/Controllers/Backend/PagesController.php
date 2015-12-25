<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
}
