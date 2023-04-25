<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Models\Protocol;

class DeleteController extends BaseController
{
    public function __invoke(Protocol $protocol)
    {
        $protocol->delete();
        return redirect()->route('admin.protocol.index');
    }
}
