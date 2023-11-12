<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('moderator.post.main');
    }
}
