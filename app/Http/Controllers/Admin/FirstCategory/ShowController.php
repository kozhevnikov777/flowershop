<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(FirstCategory $firstcategory)
    {
        return view('admin.firstcategory.show', compact('firstcategory'));
    }
}
