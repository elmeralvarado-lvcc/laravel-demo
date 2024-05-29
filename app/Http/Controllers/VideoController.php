<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('comments')->get();

        return response()->json($videos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = Video::create($request->except('comments'));

        if ($request->has('comments')) {
            $commentsData = $request->input('comments');
            foreach ($commentsData as $commentData) {
                $comment = new Comment(['body' => $commentData['body']]);
                $video->comments()->save($comment);
            }
        }

        return response()->json($video);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return response()->json($video->load('comments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->except('comments'));

        if ($request->has('comments')) {
            $commentsData = $request->input('comments');
            foreach ($commentsData as $commentData) {
                $comment = $video->comments()->find($commentData['id']);
                if ($comment) {
                    $comment->update(['body' => $commentData['body']]);
                }
            }
        }

        return response()->json($video->load('comments'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        $video->comments()->delete();

        return response()->noContent();
    }
}
