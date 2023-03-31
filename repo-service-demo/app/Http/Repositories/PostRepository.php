<?php

namespace App\Http\Repositories;
use App\Http\Interfaces\PostRepositoryInterface;
use App\Models\Post;
class PostRepository implements PostRepositoryInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function allPosts()
    {
        return $this->post->all();
    }

    public function showPosts(int $postId)
    {
        return $this->post->find($postId);
    }

    public function createPosts(array $data)
    {
        return $this->post->create($data);
    }

    public function updatePosts(int $postId, array $data)
    {
        return $this->post->where('id', $postId)->update($postId);
    }

    public function deletePost(int $postId)
    {
       return $this->post->destroy($postId);
    }
}
