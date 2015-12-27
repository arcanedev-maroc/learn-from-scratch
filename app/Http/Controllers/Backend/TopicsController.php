<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Carbon\Carbon;
use Request;
class TopicsController extends Controller
{
    public function index(Topic $topicModel)
    {
        $topics = $topicModel->latest()->get();

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

    public function store(Request $request)
    {
        // TODO: implement this method
        Topic::create(Request::all());
        return redirect('/admin/topics');
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
