<?php

namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag = PostTag::all();
        $tags = json_decode($tag);
        $tagsTitle = Tag::all();
        $posts = Post::all();
        return view('tag.post.main', compact('posts', 'tag', 'tags', 'tagsTitle'));
    }
}
