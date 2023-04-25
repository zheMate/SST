<?php

namespace App\Http\Controllers\Admin\Protocol;


use App\Models\Protocol;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(Protocol $protocol)
    {
        $users = User::all();
        return view('admin.protocol.edit', compact('protocol', 'users'));
    }
}
