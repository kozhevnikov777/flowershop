<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        $posts = Post::all();
        return view('admin.order.main', compact('orders', 'posts'));
    }
}
