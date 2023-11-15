<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Like\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        // auth()->user()->likedPosts()->toggle($post->id); //attach вместо toggle добавления кол-во связей > 1
        // return redirect()->back();
        $data = $request->validated();
        PostUserLike::firstOrCreate($data);
        return redirect()->route('personal.liked.main');
    }
}
