<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
       // dd($articles[0]);
        return view('index', compact('articles'));
    }
}
