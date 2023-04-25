<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Models\Protocol;
use Carbon\Carbon;

class ShowController extends BaseController
{
    public function __invoke(Protocol $protocol)
    {
        $parsedDateOfMeeting = Carbon::parse($protocol->date_of_meeting);
        $parsedDateOfNextMeeting = Carbon::parse($protocol->date_of_next_meeting);
        return view('admin.protocol.show', compact('protocol', 'parsedDateOfMeeting', 'parsedDateOfNextMeeting'));
    }
}
