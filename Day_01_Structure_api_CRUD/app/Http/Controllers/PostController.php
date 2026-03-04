<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Traits\ApiResponse;
use App\Services\PostService;

class PostController extends Controller
{
    use ApiResponse;
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     */

    public function index(PostRequest $request)
    {
        // \DB::enableQueryLog();
        // $posts = Post::with(['user', 'comments.user'])
        //     ->when($request->search, fn($q) => $q->search($request->search))
        //     ->when($request->user_id, fn($q) => $q->user($request->user_id))
        //     ->when($request->from_date, fn($q) => $q->fromDate($request->from_date))
        //     ->when($request->to_date, fn($q) => $q->toDate($request->to_date))
        //     ->sort($request->sort)
        //     ->paginate(5);
        // $posts = Post::query()->get();

        // foreach ($posts as $post) {
        //     $post->user;
        //     foreach ($post->comments as $comment) {
        //         $comment->user;
        //     }
        // }
        // dd(\DB::getQueryLog());
        // $version = Cache::get('posts_cache_version', 1);
        // $posts = Cache::remember("posts_page_v{$version}_" . request('page', 1), 10, function () {

        //     return Post::select('id', 'user_id', 'title', 'created_at')
        //         ->with([
        //             'user:id,name',
        //             'comments:id,post_id,user_id,message',
        //             'comments.user:id,name'
        //         ])
        //         ->withCount('comments')
        //         ->latest()
        //         ->simplePaginate(10);
        // });

        // 🔥 Clear cache
        // Cache::forget('posts_list');

        $posts = $this->postService->getAll($request->all());

        return $this->success(
            PostResource::collection($posts),
            null,
            200,
            [
                'pagination' => [
                    'total' => method_exists($posts, 'total') ? $posts->total() : null,
                    'per_page' => $posts->perPage(),
                    'current_page' => $posts->currentPage(),
                    'last_page' => method_exists($posts, 'lastPage') ? $posts->lastPage() : null,
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
    // public function store(PostRequest $request)
    // {
    //     return DB::transaction(function () use ($request) {

    //         $post = Post::create([
    //             'user_id' => auth()->id(),
    //             ...$request->validated()
    //         ]);

    //         // Create default comment automatically
    //         $post->comments()->create([
    //             'user_id' => auth()->id(),
    //             'message' => 'Auto generated first comment'
    //         ]);

    //         return $this->success(
    //             new PostResource($post->load('user', 'comments.user')),
    //             'Post created with default comment',
    //             201
    //         );
    //     });
    // }

    // public function store(PostRequest $request)
    // {
    //     DB::beginTransaction();

    //     try {

    //         $post = Post::create([
    //             'user_id' => auth()->id(),
    //             ...$request->validated()
    //         ]);

    //         $post->comments()->create([
    //             'user_id' => auth()->id(),
    //             'message' => 'Transaction comment'
    //         ]);

    //         DB::commit();

    //         return $this->success(
    //             new PostResource($post),
    //             'Post created',
    //             201
    //         );

    //     } catch (\Exception $e) {

    //         DB::rollBack();

    //         return $this->error('Transaction failed', 500);
    //     }
    // }

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
