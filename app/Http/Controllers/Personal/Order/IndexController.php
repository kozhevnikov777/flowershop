<?php

namespace App\Http\Controllers\Personal\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::all();
        $posts = Post::all();
        return view('personal.order.main', compact('orders', 'posts'));
    }
}
