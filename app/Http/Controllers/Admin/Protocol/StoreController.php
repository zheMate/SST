<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Http\Requests\Admin\Protocol\StoreRequest;
use App\Models\Protocol;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.protocol.index');
    }
}
