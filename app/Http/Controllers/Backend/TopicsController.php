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
        $topic = Topic::findOrFail($topic);
        return view ('backend.topics.show', compact($topic, 'topic'));
    }

    public function create()
    {
        return view ('backend.topics.create');
    }

    public function store(Request $request)
    {

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

    public function delete(Topic $topic)
    {
        $topic->delete();
        return redirect(route('admin::topics.index'));

    }
}
