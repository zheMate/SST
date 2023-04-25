<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.protocol.create', compact('users'));
    }
}
