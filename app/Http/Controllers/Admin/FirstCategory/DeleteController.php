<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(FirstCategory $firstcategory)
    {
        $firstcategory->delete();
        return redirect()->route('admin.firstcategory.main');
    }
}
