<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function loadView()
    {
        return view("Users",['user'=>'']);
    }
}
