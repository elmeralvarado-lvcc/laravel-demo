<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        $post = Post::create($request->all());

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post->user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        $post = $post->update($request->all());

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->noContent();
    }
}
