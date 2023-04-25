<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Models\Protocol;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $protocols = Protocol::all();
        return view('admin.protocol.index', compact('protocols'));
    }
}
