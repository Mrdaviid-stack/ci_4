<?php

namespace Modules\Todos\Controllers;

use App\Controllers\BaseController;

class TodosController extends BaseController
{
    public function index()
    {
        return view('Modules\Todos\todo_index');
    }
}
