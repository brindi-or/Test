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

Route::post('/', function () {
    return view('welcome');
    
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
});*/
Route::post("Users",[user::class,'getData']);
Route::view("login","Users");
route::view("Header",'Header');
route::view("Footer",'Footer');