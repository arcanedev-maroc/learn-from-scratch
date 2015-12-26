<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index(Topic $topicModel)
    {
        $topics = $topicModel->all();

        return view('backend.topics.index', compact('topics'));
    }

    public function show($topic)
    {
        // TODO: implement this method

        return view ('backend.topics.show');
    }

    public function create()
    {
        // TODO: implement this method

        return view ('backend.topics.create');
    }

    public function store()
    {
        // TODO: implement this method
    }

    public function edit($topic)
    {
        // TODO: implement this method

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
