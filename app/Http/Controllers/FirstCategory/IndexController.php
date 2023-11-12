<?php

namespace App\Http\Controllers\FirstCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $firstcategories = FirstCategory::all();
        return view('firstcategory.main', compact('firstcategories'));
    }
}
