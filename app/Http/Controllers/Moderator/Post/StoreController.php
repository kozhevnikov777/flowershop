<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('moderator.post.main');
    }
}
