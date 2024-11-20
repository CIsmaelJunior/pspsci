<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('news.index', compact('posts'));
    }
}
