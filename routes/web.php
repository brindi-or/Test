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
/*Route::get("/about",function(){
    return view('about');
});
route::view("about",'about');
route::view("contact",'contact');
//Route::get("path",'controller file');
Route::get("user",'User@index');
//Route::view("Users",'Users');
Route::get("/Users/{name}",function($name){
    return view("Users",['name'=>$name]);
});*/
Route::get("Users",[user::class,'loadView']);
//Route::view("Users",['Users']);