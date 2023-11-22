<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Service\CategoryService;

class BaseController extends Controller
{
    public $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
