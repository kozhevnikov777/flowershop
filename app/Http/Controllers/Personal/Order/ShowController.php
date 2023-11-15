<?php

namespace App\Http\Controllers\Personal\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('personal.order.show', compact('order'));
    }
}
