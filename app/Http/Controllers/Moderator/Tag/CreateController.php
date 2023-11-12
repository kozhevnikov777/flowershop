<?php

namespace App\Http\Controllers\Moderator\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('moderator.tag.create');
    }
}
