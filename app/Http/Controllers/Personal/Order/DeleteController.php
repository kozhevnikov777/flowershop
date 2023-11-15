<?php

namespace App\Http\Controllers\Personal\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Post\UpdateRequest;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Order $order)
    {
        $order->delete();
        return redirect()->route('personal.order.main');
    }
}
