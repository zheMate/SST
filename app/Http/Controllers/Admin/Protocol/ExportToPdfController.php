<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Models\Protocol;
use Carbon\Carbon;
use PDF;

class ExportToPdfController extends BaseController
{
    public function __invoke(Protocol $protocol)
    {
        $parsedDateOfMeeting = Carbon::parse($protocol->date_of_meeting);
        $parsedDateOfNextMeeting = Carbon::parse($protocol->date_of_next_meeting);
        $pdf = PDF::loadView('admin.protocol.pdf.protocol_in_pdf', compact('protocol', 'parsedDateOfMeeting', 'parsedDateOfNextMeeting'));
        return $pdf->download( 'Протокол '. $protocol->title.' '.$protocol->date_of_meeting .'.pdf');
    }
}
