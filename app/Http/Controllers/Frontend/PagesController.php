<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class PagesController extends Controller
{
    public function index(Topic $topicModel)
    {
        // @todo: Get the 5 latest topics for the home page
        $topics = $topicModel->all();

        return view('frontend.home', compact('topics'));
    }
}
