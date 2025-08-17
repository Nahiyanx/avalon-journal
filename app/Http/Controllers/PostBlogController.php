<?php

namespace App\Http\Controllers;

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
        return view('blogs.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        $data['user_id'] = Auth::id();

        Post::create($data);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
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
        return view('blogs.edit', compact('post'));   
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
    ]);

        $post->update($validated);

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
}
