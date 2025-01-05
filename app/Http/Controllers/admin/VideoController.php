<?php

// app/Http/Controllers/Admin/VideoController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video; // Assuming you have a Video model

class VideoController extends Controller
{
    public function create()
    {
        return view('admin.upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        // Extract the YouTube video ID from the URL
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([^&]+)/', $request->url, $matches);

        if (!isset($matches[1])) {
            return back()->withErrors(['url' => 'Invalid YouTube URL'])->withInput();
        }

        $videoId = $matches[1];

        // Save to the database
        Video::create([
            'title' => $request->title,
            'youtube_id' => $videoId,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.videos.create')->with('success', 'Video uploaded successfully!');
    }
}
