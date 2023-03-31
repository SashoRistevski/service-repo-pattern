<?php

namespace App\Http\Interfaces;

interface PostRepositoryInterface
{
public function allPosts();
public function showPosts(int $postId);
public function createPosts(array $data);
public function updatePosts(int $postId, array $data);
public function deletePost(int $postId);

}
