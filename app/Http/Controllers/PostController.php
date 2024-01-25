<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostControllerStoreRequest;
use App\Http\Requests\PostControllerUpdateRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(Request $request): PostCollection
    {
        $posts = Post::all();

        return new PostCollection($posts);
    }

    public function store(PostControllerStoreRequest $request): PostResource
    {
        $post = Post::create($request->validated());

        return new PostResource($post);
    }

    public function show(Request $request, Post $post): PostResource
    {
        return new PostResource($post);
    }

    public function update(PostControllerUpdateRequest $request, Post $post): PostResource
    {
        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy(Request $request, Post $post): Response
    {
        $post->delete();

        return response()->noContent();
    }
}
