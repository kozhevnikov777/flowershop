<?php

namespace App\Service;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $category = Category::firstOrCreate($data);
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            abort(500);
        }
    }

    public function update($data, $category)
    {
        try {
            Db::beginTransaction();
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $category->update($data);
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            abort(500);
        }
        return $category;
    }
}
