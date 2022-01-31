<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

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
    function Add(Request $req){
        $data= $req ->input('Username');
        $req->session()->flash('Username',$data);
        return redirect('Add');

    }
   
    

}
