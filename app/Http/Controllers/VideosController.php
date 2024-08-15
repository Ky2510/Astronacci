<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $videos = Video::where('author_id', Auth::user()->id)
                            ->where('status', 'published')
                            ->get();
        return view('video.index', [
            'videos' => $videos
        ]);
    }

    public function create()
    {
        return view('video.form'); 
    }

    public function draft() 
    {
        $videos = Video::where('author_id', Auth::user()->id)
                            ->where('status', 'draft')
                            ->get();
        return view('video.draft', [
            'videos' => $videos
        ]);
    }

    public function archived() 
    {
        $videos = Video::where('author_id', Auth::user()->id)
                            ->where('status', 'archived')
                            ->get();
        return view('video.archived', [
            'videos' => $videos
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required', 
            'author_id' => 'required|exists:users,id', 
            'status' => 'required|in:draft,published,archived',
        ]);

        Video::create([
            'title' => $validatedData['title'],
            'url' => $validatedData['url'],
            'author_id' => $validatedData['author_id'],
            'status' => $validatedData['status'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('video.index');
    }

    public function detail($id)
    {
        $video = Video::find($id);

        return view('video.detail', [
            'video' => $video
        ]);
    }

    public function delete($id)
    {
        $video = Video::find($id); 
    
        if (!$video) {
            return redirect()->back(); 
        }
    
        $video->delete(); 
    
        return redirect()->route('video.index');
    }
}
