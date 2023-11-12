<?php

namespace App\Http\Controllers\Moderator\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return view('moderator.tag.show', compact('tag'));
    }
}
