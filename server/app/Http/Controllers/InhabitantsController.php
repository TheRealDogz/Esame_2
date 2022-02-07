<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inhabitants extends Controller
{
    public function list()
    {
        return Inhabitants::all();
    }
}
