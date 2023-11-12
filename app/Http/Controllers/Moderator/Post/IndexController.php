<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('moderator.post.main', compact('posts'));
    }
}
