<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\Schema;

class TopicController extends Controller
{
    public function __construct()
    {
        // Only load topics when the DB table exists (prevents errors before running migrations)
        if (Schema::hasTable('topics')) {
            $topics = Topic::all();
            view()->share(['topics' => $topics]);
        } else {
            // share empty collection so views that expect $topics still work
            view()->share(['topics' => collect()]);
        }
    }

    public function index()
    {
        $topics = Topic::all();
        return view('admin.topic.topic-list', compact('topics'));
    }

    public function create()
    {
        return view('admin.topic.topic-add');
    }

    public function store(Request $request)
    {
        $status = ($request->status === 'active') ? 1 : 0;
        $topic = Topic::create([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $status,
        ]);
        if($topic) return redirect()->route('admin.topic.index');
        return back();
    }

    public function edit(Topic $topic)
    {
        return view('admin.topic.topic-edit', compact('topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        $status = ($request->status === 'active') ? 1 : 0;
        $topic->update([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $status,
        ]);
        return redirect()->route('admin.topic.index');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topic.index');
    }
}
