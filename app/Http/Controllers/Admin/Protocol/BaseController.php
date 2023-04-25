<?php

namespace App\Http\Controllers\Admin\Protocol;

use App\Http\Controllers\Controller;
use App\Service\ProtocolService;


class BaseController extends Controller
{
    public $service;

    public function __construct(ProtocolService $service)
    {
        $this->service = $service;
    }

}
