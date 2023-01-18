<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function guest()
    {
        return "Hello Guest";
    }
    public function member($name)
    {
        return "your name is $name";
    }
}