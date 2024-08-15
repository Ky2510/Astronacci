<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        $articles = Article::where('author_id', Auth::user()->id)
                            ->where('status', 'published')
                            ->get();
        return view('article.index', [
            'articles' => $articles
        ]);
    }

    public function draft() 
    {
        $articles = Article::where('author_id', Auth::user()->id)
                            ->where('status', 'draft')
                            ->get();
        return view('article.draft', [
            'articles' => $articles
        ]);
    }

    public function archived() 
    {
        $articles = Article::where('author_id', Auth::user()->id)
                            ->where('status', 'archived')
                            ->get();
        return view('article.archived', [
            'articles' => $articles
        ]);
    }

    public function create()
    {
        return view('article.form');
    }

    public function store(Request $request)
{
    // Validasi input
    $article = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author_id' => 'required|string|max:100', 
        'image_url' => 'required|url',
        'status' => 'required|in:draft,published,archived',
        'tags' => 'nullable|string'
    ]);


        Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author_id' => $request->input('author_id'),
            'image_url' => $request->input('image_url'),
            'status' => $request->input('status'),
            'tags' => $request->input('tags') ? $request->input('tags') : null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('article.index');
    }

    public function detail($id)
    {
        $article = Article::find($id);

        return view('article.detail', [
            'article' => $article
        ]);
    }


    public function delete($id)
    {
        $article = Article::find($id);
    
        if (!$article) {
            return redirect()->back();
        }
    
        $article->delete();
    
        return redirect()->route('article.index');
    }
    
}
