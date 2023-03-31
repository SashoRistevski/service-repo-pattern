<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Services\PostService;

class PostController extends Controller
{

    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->postService->getAllPosts();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): PostResource
    {
       $post = $this->postService->createPosts($request->only( ['title','description'] ));

       return new PostResource($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $postId): PostResource
    {
        $showPost = $this->postService->showPosts($postId);

        return new PostResource($showPost);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
