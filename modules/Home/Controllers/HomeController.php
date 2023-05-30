<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('Modules\Home\home_index');
    }
}
