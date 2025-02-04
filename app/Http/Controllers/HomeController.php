<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = null): string
    {
        return '안녕하세욧! from HomController 이름?' . $name;
    }
}
