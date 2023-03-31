<?php

namespace App\Http\Services;

use App\Http\Interfaces\PostServicesInterface;
use App\Http\Repositories\PostRepository;

class PostService implements PostServicesInterface
{
protected $postRepository;

public function __construct(PostRepository $postRepository)
{
    $this->postRepository = $postRepository;
}



    public function showPosts(int $postId)
    {
       return $this->postRepository->showPosts($postId);
    }

    public function getAllPosts()
    {
        return $this->postRepository->allPosts();
    }
    public function createPosts(array $data)
    {
        return $this->postRepository->createPosts($data);
    }

    public function updatePosts(int $postId, array $data)
    {
        return $this->postRepository->updatePosts($postId,$data);
    }

    public function deletePost(int $postId)
    {
        return $this->postRepository->deletePost($postId);
    }
}
