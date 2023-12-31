<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FirstCategory\UpdateRequest;
use App\Models\Category;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, FirstCategory $firstcategory)
    {
        $data = $request->validated();
        $firstcategory->update($data);
        return view('admin.firstcategory.show', compact('firstcategory'));
    }
}
