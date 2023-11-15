<?php

namespace App\Http\Controllers\Personal\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        $puls = PostUserLike::all();
        $orderQty = 0;

        foreach ($posts as $post) {
            foreach ($puls as $pul) {
                if ($pul->post_id === $post->id) {
                    $orderQty += $pul->count * $post->price;
                }
            }
        }
        return view('personal.order.create', compact('posts', 'puls', 'orderQty'));
    }
}
