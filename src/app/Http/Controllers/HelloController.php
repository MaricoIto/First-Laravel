<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ()
    {
        return view('Hello');
    }
}
