<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function __construct()
    {
        $videos = Video::all();
        $topics = Topic::all();
        view()->share(['videos' => $videos, 'topics' => $topics]);
    }

    public function index()
    {
        $videos = Video::all();
        return view('admin.video.video-list', compact('videos'));
    }

    public function create()
    {
        return view('admin.video.video-add');
    }

    public function store(Request $request)
    {
        $status = ($request->status === 'active') ? 1 : 0;
        $idtopic = $request->filled('idtopic') ? (int) $request->idtopic : null;

        $videoPath = null;
        if ($request->hasFile('video')) {
            $request->validate(['video' => 'file|mimes:mp4,webm,ogg|max:102400']);
            $videoPath = $request->file('video')->store('videos','public');
        }

        // Handle image input: allow URL, path, or data-uri (base64)
        $imagePath = null;
        if ($request->filled('image')) {
            $img = $request->image;
            if (Str::startsWith($img, 'data:')) {
                if (preg_match('/^data:image\/([a-zA-Z0-9]+);base64,/', $img, $m)) {
                    $ext = strtolower($m[1]);
                } else {
                    $ext = 'png';
                }
                $dataPos = strpos($img, ',');
                $data = substr($img, $dataPos + 1);
                $decoded = base64_decode($data);
                if ($decoded !== false) {
                    $filename = 'images/' . time() . '_' . Str::random(8) . '.' . $ext;
                    Storage::disk('public')->put($filename, $decoded);
                    $imagePath = 'storage/' . $filename;
                } else {
                    $imagePath = null;
                }
            } else {
                $imagePath = $img;
            }
        }

        $video = Video::create([
            'title' => $request->title,
            'image' => $imagePath,
            'video' => $videoPath,
            'content' => $request->content,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $status,
            'idtopic' => $idtopic,
        ]);

        if($video) return redirect()->route('admin.video.index');
        return back();
    }

    public function edit(Video $video)
    {
        return view('admin.video.video-edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $status = ($request->status === 'active') ? 1 : 0;
        $idtopic = $request->filled('idtopic') ? (int) $request->idtopic : null;

        $videoPath = $video->video;
        if ($request->hasFile('video')) {
            $request->validate(['video' => 'file|mimes:mp4,webm,ogg|max:102400']);
            $videoPath = $request->file('video')->store('videos','public');
        }

        // Handle image input (same logic as store)
        $imagePath = $video->image;
        if ($request->filled('image')) {
            $img = $request->image;
            if (Str::startsWith($img, 'data:')) {
                if (preg_match('/^data:image\/([a-zA-Z0-9]+);base64,/', $img, $m)) {
                    $ext = strtolower($m[1]);
                } else {
                    $ext = 'png';
                }
                $dataPos = strpos($img, ',');
                $data = substr($img, $dataPos + 1);
                $decoded = base64_decode($data);
                if ($decoded !== false) {
                    $filename = 'images/' . time() . '_' . Str::random(8) . '.' . $ext;
                    Storage::disk('public')->put($filename, $decoded);
                    $imagePath = 'storage/' . $filename;
                }
            } else {
                $imagePath = $img;
            }
        }

        $video->update([
            'title' => $request->title,
            'image' => $imagePath,
            'video' => $videoPath,
            'content' => $request->content,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $status,
            'idtopic' => $idtopic,
        ]);

        return redirect()->route('admin.video.index');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index');
    }
}
