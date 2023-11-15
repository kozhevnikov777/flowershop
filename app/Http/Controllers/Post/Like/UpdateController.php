<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Like\UpdateRequest;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, PostUserLike $pul)
    {
        $data = $request->validated();
        $pul = PostUserLike::update($data);
        return view('personal.liked.main', compact('pul'));
    }
}
