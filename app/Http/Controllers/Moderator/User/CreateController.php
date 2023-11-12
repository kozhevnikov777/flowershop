<?php

namespace App\Http\Controllers\Moderator\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return view('moderator.user.create', compact('roles'));
    }
}
