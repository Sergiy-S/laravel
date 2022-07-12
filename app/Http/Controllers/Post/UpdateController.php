<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $post = $this->service->store($post, $data);

        return new PostResource($post);

        // return redirect()->route('post.show', $post->id);
    }
}
