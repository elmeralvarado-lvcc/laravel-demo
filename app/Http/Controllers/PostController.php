<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('tags')->get();

        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create($request->except('tags'));

        if ($request->has('tags')) {
            $this->attachTags($post, $request->input('tags'));
        }

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post->load('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        if ($request->has('tags')) {
            $this->syncTags($post, $request->input('tags'));
        }

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $post->tags()->delete();

        return response()->noContent();
    }

    private function attachTags($model, $tagNames)
    {
        foreach ($tagNames as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName['name']]);
            $model->tags()->attach($tag);
        }
    }

    private function syncTags($model, $tagsData)
    {
        $tagIds = [];

        foreach ($tagsData as $tagData) {
            $tag = Tag::firstOrCreate(['name' => $tagData['name']]);
            $tagIds[] = $tag->id;
        }

        $model->tags()->sync($tagIds);
    }
}
