<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')
        ->latest()
        ->cursorPaginate(3);
        return view('blogs.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'categories' => ['required','array'],
        ]);

        $data['user_id'] = Auth::id();

        $post = Post::create([
            'title' => $request->title,
            'body' =>  $request->body,
            'user_id' => Auth::id(),
        ]);

        if (!empty($data['categories'])) {
            $post->categories()->attach($request->categories);
        }

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('categories');
        return view('blogs.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {   
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        $categories = Category::all();
        return view('blogs.edit', compact('post','categories'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'categories' => 'required|array',
        ]);

        
        $post->update([
            'title' => $request->title,
            'body' =>  $request->body
        ]);
        $post->categories()->sync($request->categories);
        return redirect('/')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        if (auth()->id() !== $post->user_id) {
        abort(403);
    }

        $post->delete();
        return redirect('/')->with('success', 'Post deleted successfully!');
    }   

    public function search(Request $request) {

        $query = $request->input('query');

        $posts = Post::where('title', 'like', '%' . $query . '%')
                    ->latest()
                    ->cursorPaginate(4)
                    ->withQueryString();

        return view('search', compact('posts', 'query'));


    }





}

