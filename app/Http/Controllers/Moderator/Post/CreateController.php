<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('moderator.post.create', compact('categories', 'tags'));
    }
}
