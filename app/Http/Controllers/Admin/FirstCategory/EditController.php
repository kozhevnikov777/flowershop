<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(FirstCategory $firstcategory)
    {
        return view('admin.firstcategory.edit', compact('firstcategory'));
    }
}
