<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicShowController extends Controller
{
    /**
     * Show all active topics with their active videos
     */
    public function index()
    {
        $topics = Topic::where('status', 1)->with(['videos' => function ($q) {
            $q->where('status', 1);
        }])->get();

        return view('topics.index', compact('topics'));
    }

    /**
     * Show single topic and its videos
     */
    public function show(Topic $topic)
    {
        if ($topic->status != 1) {
            abort(404);
        }

        $topic->load(['videos' => function ($q) {
            $q->where('status', 1);
        }]);

        return view('topics.show', compact('topic'));
    }
}
