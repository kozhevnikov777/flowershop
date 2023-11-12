<?php

namespace App\Http\Controllers\Moderator\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('moderator.category.main');
    }
}
