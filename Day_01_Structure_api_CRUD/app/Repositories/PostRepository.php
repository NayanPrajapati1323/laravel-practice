<?php

namespace App\Repositories;

use App\Repositories\Interface\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
class PostRepository implements PostRepositoryInterface
{
    public function getAll($filters = [])
    {
        $version = Cache::get('posts_cache_version', 1);
        $posts = Cache::remember("posts_page_v{$version}_" . request('page', 1), 10, function () {

            return Post::select('id', 'user_id', 'title', 'created_at')
                ->with([
                    'user:id,name',
                    'comments:id,post_id,user_id,message',
                    'comments.user:id,name'
                ])
                ->withCount('comments')
                ->latest()
                ->simplePaginate(10);
        });
        return $posts;
    }

    public function getById($id)
    {
        return Post::find($id);
    }

    public function create($data)
    {
        return Post::create($data);
    }

    public function update($id, $data)
    {
        $post = $this->getById($id);
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        $post = $this->getById($id);
        $post->delete();
        return $post;
    }
}
