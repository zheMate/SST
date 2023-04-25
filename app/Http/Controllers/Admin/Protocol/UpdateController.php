<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Http\Requests\Admin\Protocol\UpdateRequest;
use App\Models\Protocol;
use Carbon\Carbon;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Protocol $protocol)
    {
        $data = $request->validated();
        $protocol = $this->service->update($data, $protocol);
        $parsedDateOfMeeting = Carbon::parse($protocol->date_of_meeting);
        $parsedDateOfNextMeeting = Carbon::parse($protocol->date_of_next_meeting);
        return view('admin.protocol.show', compact('protocol', 'parsedDateOfMeeting', 'parsedDateOfNextMeeting'));
    }
}
