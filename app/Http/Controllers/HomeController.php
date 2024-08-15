<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeUserRole;
use App\Models\Article;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $articleLimit = 3; 
        $videoLimit = 3;

        if ($user) {
            if ($user->role === 'C') {
                $articleLimit = PHP_INT_MAX;
                $videoLimit = PHP_INT_MAX;
            } elseif ($user->role === 'B') {
                $articleLimit = 10; 
                $videoLimit = 10; 
            }
        }

        $articles = Article::where('status', 'published')->limit($articleLimit)->get(); 
        $videos = Video::where('status', 'published')->limit($videoLimit)->get(); 

        $userId = Auth::user()->id; 
        ChangeUserRole::dispatch($userId)->delay(now()->addMinutes(10));
        return view('home', [
            'articles' => $articles,
            'videos' => $videos
        ]);
    }

    public function memberUpgrade(Request $request, $id)
    {
        $newRole = $request->input('role'); 
        User::where('id', $id)->update(['role' => $newRole]);
        $userId = Auth::user()->id; 
        ChangeUserRole::dispatch($userId)->delay(now()->addMinutes(10));

        return redirect()->back();
    }
}

    
