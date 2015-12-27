<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TopicsController extends Controller
{
    public function index()
    {
        // TODO: implement this method
    }

    public function show($topic)
    {
        // TODO: implement this method
        $topic = Topic::findOrFail($topic);
        return view ('frontend.home', compact($topic, 'topic'));
    }
}
