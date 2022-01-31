<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
Route::get("/login",function(){
    if(session()->has('Username')){
        session()->pull('Username ');
    }
    return redirect('Users'); 
});
//Route::get("path",'controller file');
/*Route::get("/about",function(){
    return view('about');
});
route::view("about",'about');
route::view("contact",'contact');

Route::get("user",'User@index');
Route::get("/Users/{name}",function($name){
    return view("Users",['name'=>$name]);
});
Route::group(['middleware'=>['protectedPage']],function(){
    
});*/

Route::post("Users",[user::class,'getData']);
//Route::post("Users",[user::class,'UL']);
route::view("Header",'Header');
Route::get("/Users/{name}",function($name){
    return view("Users",['name'=>$name]);
});
route::view("Footer",'Footer');
route::view("welcome",'welcome');
route::view("welcome",'welcome');
//Route::view("Users","Users")->middleware('protectedPage');
Route::get("Users",[user::class,'index']);
Route::get("Users",[user::class,'index']);
Route::view("Signup","Signup");
Route::view("Users","Users");
Route::view("contact",'contact');
Route::post("contact",[user::class,'Add']);
