<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $firstcategories = FirstCategory::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags', 'firstcategories'));
    }
}
