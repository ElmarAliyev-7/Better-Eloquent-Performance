<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
        $posts = Post::with('user')->get();
        return view('posts', compact('posts'));
    }
}
