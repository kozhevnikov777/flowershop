<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->LikedPosts;
        $puls = PostUserLike::all();
        return view('personal.liked.main', compact('posts', 'puls'));
    }
}
