<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Traits\ApiResponse;

class PostController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        // \DB::enableQueryLog();
        $posts = Post::with(['user', 'comments.user'])
            ->when($request->search, fn($q) => $q->search($request->search))
            ->when($request->user_id, fn($q) => $q->user($request->user_id))
            ->when($request->from_date, fn($q) => $q->fromDate($request->from_date))
            ->when($request->to_date, fn($q) => $q->toDate($request->to_date))
            ->sort($request->sort)
            ->paginate(5);
        // $posts = Post::query()->get();

        // foreach ($posts as $post) {
        //     $post->user;
        //     foreach ($post->comments as $comment) {
        //         $comment->user;
        //     }
        // }
        // dd(\DB::getQueryLog());
        return $this->success(
            PostResource::collection($posts),
            null,
            200,
            [
                'pagination' => [
                    'total' => $posts->total(),
                    'per_page' => $posts->perPage(),
                    'current_page' => $posts->currentPage(),
                    'last_page' => $posts->lastPage(),
                    'next_page_url' => $posts->nextPageUrl(),
                    'prev_page_url' => $posts->previousPageUrl(),
                ]
            ]
        );
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

        return $this->success(
            new PostResource($post->load('user')),
            'Post created successfully',
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => true,
            'message' => 'Post fetched successfully',
            'data' => new PostResource($post->load('user', 'comments.user'))
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->update($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Post updated successfully',
            'data' => new PostResource($post->load('user', 'comments.user'))
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
        return response()->json([
            'status' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
}
