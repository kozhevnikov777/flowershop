<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category = $this->service->update($data, $category);
        return view('admin.category.show', compact('category'));
    }
}
