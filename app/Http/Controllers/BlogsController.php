<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')
        ->latest()
        ->cursorPaginate(3);
        return view('blogs.index',['posts' => $posts]);
    }
}
