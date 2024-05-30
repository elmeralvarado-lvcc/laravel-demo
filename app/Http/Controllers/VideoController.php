<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Tag;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('tags')->get();

        return response()->json($videos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = Video::create($request->except('tags'));

        if ($request->has('tags')) {
            $tagsData = $request->input('tags');

            foreach ($tagsData as $tagData) {
                $tag = Tag::create(['name' => $tagData['name']]);
                $video->tags()->attach($tag);
            }
        }

        return response()->json($video);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return response()->json($video->load('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->except('tags'));

        if ($request->has('tags')) {
            $tagsData = $request->input('tags');
            $tagsId = [];

            foreach ($tagsData as $tagData) {
                $tag = Tag::firstOrCreate(['name' => $tagData['name']]);
                $tagsId[] = $tag->id;
            }

            $video->tags()->sync($tagsId);
        }

        return response()->json($video);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        $video->tags()->delete();

        return response()->noContent();
    }
}
