<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\htmlController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\storeController;
use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\memberController;

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
//Route::get('/prof/{lang}', function ($lang) {
//  App::setlocale($lang);
//  return view('prof');
//});


//Route::view('login','login');
//Route::view('profile','profile');

//Route::get('/logout', function () {
//  if (session()->has('user')) 
//  {
//    session()->pull('user',null);
  //}
  //return redirect('login');
//});
//Route::post("user",[userAuth::class,'userLogin']);

//Route::post("html",[htmlController::class,'getData']);
//Route::view('inner','inner')->middleware('protectedPage');
//Route::view('html','html');
//Route::view('about','about');
//Route::group(['middleware'=>['protectPage']],function(){
//  Route::view('about','about');
//});
//Route::put("users",[UserController::class,'testRequest']);

//Route::get('/about/{name}', function ($name) {

  //  return view('about',["about"=>$name]);
//});

//Route::view('about','/about');
//Route::view('contact','/contact');
//Route::get("users/{id}",[UserController::class,'show']);
//Route::view('store','storeuser');
//Route::post("storecontroller",[storeController::class,'storeM']);
//Route::view('upload','upload');
//Route::post("upload",[uploadController::class,'index']);
//Route::view('prof','prof');
//Route::post('add',[memberController::class,'addData']);
//Route::view('add','addmember');
//Route::get('list',[memberController::class,'show']);
//Route::get('delete{id}',[memberController::class,'delete']);
//Route::get('edit{id}',[memberController::class,'showData']);
//Route::post('edit',[memberController::class,'update']);
Route::get("list",[memberController::class,'operations']);




//this is edit and example
//<td><a href={{"delete".$members['id']}} >Delete</a></td>
//        <td><a href={{"edit".$members['id']}} >Edit</a></td>


//this is the if else example cut and paste in user.blade.php
//@if($name=="farzan")
//<h2>Hi, {{$name}}</h2>
//@elseif ($name=="ahmed")
//<h2>Hi, {{$name}}</h2>
//@else
//<h2>Hi, Unknown</h2>
//@endif

//this is the loops example cut and paste in user.blade.php
//@foreach($users as $user)
//<h4>{{$user}}</h4>
//@endforeach


//@for($i=1;$i<11;$i++)
//<h4>{{$i}}</h4>
//@endfor
