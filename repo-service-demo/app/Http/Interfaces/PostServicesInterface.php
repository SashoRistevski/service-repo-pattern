<?php

namespace App\Http\Interfaces;

interface PostServicesInterface
{
    public function showPosts(int $postId);
    public function createPosts(array $data);
    public function updatePosts(int $postId, array $data);
    public function deletePost(int $postId);



}
