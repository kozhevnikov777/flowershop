<?php

namespace App\Http\Controllers\Admin\FirstCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FirstCategory\StoreRequest;
use App\Models\Category;
use App\Models\FirstCategory;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        FirstCategory::firstOrCreate($data);
        return redirect()->route('admin.firstcategory.main');
    }
}
