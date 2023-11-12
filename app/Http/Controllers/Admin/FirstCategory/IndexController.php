<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $firstcategories = FirstCategory::all();
        return view('admin.firstcategory.main', compact('firstcategories'));
    }
}
