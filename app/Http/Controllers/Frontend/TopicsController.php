<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
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
        return view ('frontend.show', compact($topic, 'topic'));
    }
}
