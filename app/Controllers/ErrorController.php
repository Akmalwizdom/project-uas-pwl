<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ErrorController extends BaseController
{
    public function accessDenied()
    {
        return view('errors/access_denied');
    }
}