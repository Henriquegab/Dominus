<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends BaseController
{
    public function index()
    {
        return view('web.home.index');
    }
}
