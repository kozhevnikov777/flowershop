<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $allPosts = Post::orderBy('created_at', 'DESC')->paginate(3); // ->get()
        $categories = Category::orderBy('updated_at', 'ASC')->take(4)->get(); //->paginate(4);
        $first_categories = FirstCategory::all();
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('post.main', compact('posts', 'randomPosts', 'likedPosts', 'categories', 'first_categories', 'allPosts'));
    }
}
