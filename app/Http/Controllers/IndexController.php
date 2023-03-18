<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('q')){
            $query = $request->get('q');
            $articles = Article::query()->where('is_published', true)
                ->where('title', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%")
                ->orderBy('created_at', 'desc')->get();
        } else {
            $articles = Article::query()->where('is_published', true)->limit(3)
            ->orderBy('created_at', 'desc')->get();
        }

        return view('index', ['articles' => $articles]);
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post()
    {
        return view('post');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signin()
    {
        return view('signin');
    }
}
