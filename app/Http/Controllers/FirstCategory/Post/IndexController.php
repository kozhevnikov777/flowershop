<?php

namespace App\Http\Controllers\FirstCategory\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FirstCategory $firstcategory)
    {
        $posts = $firstcategory->posts()->paginate(5);
         return view('firstcategory.post.main', compact('posts'));
    }
}
