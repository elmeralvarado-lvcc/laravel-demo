<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comments')->get();

        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create($request->except('comments'));

        if ($request->has('comments')) {
            $commentsData = $request->input('comments');
            foreach ($commentsData as $commentData) {
                $comment = new Comment(['body' => $commentData['body']]);
                $post->comments()->save($comment);
            }
        }

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post->load('comments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->except('comments'));

        if ($request->has('comments')) {
            $commentsData = $request->input('comments');
            foreach ($commentsData as $commentData) {
                $comment = $post->comments()->find($commentData['id']);
                if ($comment) {
                    $comment->update(['body' => $commentData['body']]);
                }
            }
        }

        return response()->json($post->load('comments'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $post->comments()->delete();

        return response()->noContent();
    }
}
