<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

use App\Http\Controllers\UserController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\htmlController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\storeController;
use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\memberController;
use App\Http\Controllers\calculateController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\accessController;
use App\Http\Controllers\memController;
use App\Http\Controllers\mutatorController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\studentController;

use App\Mail\sampleMail;



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

//$info ="this is the example of fluent strings";
//$info=Str::ucfirst($info);
//$info=Str::replaceFirst("This","Hi",$info);
//$info=Str::camel($info);
//$info=Str::of($info)
//  ->ucfirst($info)
//  ->replaceFirst("This","Hi",$info)
//  ->camel($info);
//echo $info;

Route::get('/', function () {

    //return view('welcome');
    return new sampleMail();
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
//Route::get("list",[memberController::class,'operations']);
//Route::get('list',[calculateController::class,'operation']);
//Route::get('list',[joinController::class,'joins']);
//Route::get('list',[accessController::class,'aces']);
//Route::get('member',[mutatorController::class,'index']);
//Route::get('show',[memController::class,'dev']);
//Route::get('device/{key:device}',[deviceController::class,'index']);
Route::get('list',[studentController::class,'list']);

Route::get('sendemail',[emailController::class,'sendEmail']);





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

//example of one to many relation
//function getDevice(){
//  return $this->hasMany('App\Models\device');
//}