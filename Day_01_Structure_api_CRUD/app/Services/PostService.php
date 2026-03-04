<?php

namespace App\Services;

use App\Repositories\Interface\PostRepositoryInterface;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function getAll($filters = [])
    {
        return $this->postRepository->getAll($filters);
    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }

    public function create($data)
    {
        return $this->postRepository->create($data);
    }

    public function update($id, $data)
    {
        return $this->postRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->postRepository->delete($id);
    }
}
