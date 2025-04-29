<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function admin(): string
    {
        return view('dashboard/admin');
    }

    public function user(): string
    {
        return view('dashboard/user');
    }
}
