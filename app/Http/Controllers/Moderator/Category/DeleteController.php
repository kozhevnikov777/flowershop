<?php

namespace App\Http\Controllers\Moderator\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('moderator.category.main');
    }
}
