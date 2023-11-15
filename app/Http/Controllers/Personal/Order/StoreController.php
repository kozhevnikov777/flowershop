<?php

namespace App\Http\Controllers\Personal\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Order\StoreRequest;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $order = Order::create($data);

        return redirect()->route('personal.order.main', compact('order'));
    }
}
