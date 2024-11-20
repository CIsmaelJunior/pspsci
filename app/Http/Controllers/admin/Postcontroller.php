<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.liste-articles', compact('posts'));
    }

    public function create()
    {
        return view('admin.add-article');
    }
}
