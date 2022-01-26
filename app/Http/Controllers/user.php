<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            'Username'=>'required | max :10',//permet de dire que le nom est necessaire pour se conecter 
            'Userpassword'=>'required | min:5' 
        ]);
        return $req->input();
    }
}
