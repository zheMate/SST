<?php

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('personal.commented.index', compact('comments'));
    }
}
