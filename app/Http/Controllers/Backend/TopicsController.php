<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class TopicsController extends Controller
{
    public function index()
    {
        $topics = \App\Models\Topic::all();
        return view ('backend.topics.index',compact('topics', $topics));
    }

    public function show($topic)
    {
        return view ('backend.topics.show');
    }

    public function create()
    {

        return view ('backend.topics.create');
    }

    public function store()
    {
        // TODO: implement this method
    }

    public function edit($topic)
    {
        return view ('backend.topics.edit');
    }

    public function update($topic)
    {
        // TODO: implement this method
    }

    public function delete($topic)
    {
        // TODO: implement this method
    }
}
