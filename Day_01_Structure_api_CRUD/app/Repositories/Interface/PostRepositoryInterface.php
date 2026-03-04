<?php

namespace App\Repositories\Interface;

interface PostRepositoryInterface
{
    public function getAll($filters = []);
    public function getById($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
}
