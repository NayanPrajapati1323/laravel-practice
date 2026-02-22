<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request, Post $post)
    {
        $comment = $post->comments()->create([
            'user_id' => auth()->id(),
            ...$request->validated(),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Comment created successfully',
            'data' => new CommentResource($comment->load('user'))
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->update($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Comment updated successfully',
            'data' => new CommentResource($comment->load('user'))
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();

        return response()->json([
            'status' => true,
            'message' => 'Comment deleted successfully'
        ], 200);
    }
}
