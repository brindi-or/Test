<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            'Username'=>'required | max :10',//permet de dire que le nom est necessaire pour se conecter 
            'Userpassword'=>'required | min:5' 
        ]);
        $data =$req->input();
        return view("welcome", compact("data")) ;
    }
    function index(){
        return DB::select("select * from users"); 
        
    }

    

}
