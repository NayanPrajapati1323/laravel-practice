<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
        $posts = Post::with('user')->latest()->paginate(10);

        return response()->json([
            'status' => true,
            'post' => new PostResource($post->load('user'))
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = Post::create([
            'user_id' => auth()->id(),
            ...$request->validated()
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post created successfully',
            'post' => new PostResource($post->load('user'))
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => true,
            'message' => 'Post fetched successfully',
            'post' => new PostResource($post->load('user'))
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        // Only owner can update
        if (auth()->id() !== $post->user_id) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $post->update($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Post updated successfully',
            'post' => new PostResource($post->load('user'))
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (
            auth()->id() !== $post->user_id &&
            auth()->user()->role !== 'admin'
        ) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized'
            ], 403);
        }
        $post->delete();
        return response()->json([
            'status' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
}
