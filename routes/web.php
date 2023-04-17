<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

//login pages
Route::get('/',[LoginController::class,'login']);
Route::post('/adminaccess',[LoginController::class,'adminaccess']);
Route::get('/adminlogout',[LoginController::class,'adminlogout']);


//admin
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/users',[AdminController::class,'users']);
Route::get('/admin/ranking',[AdminController::class,'ranking']);
Route::get('/admin/feedback',[AdminController::class,'feedback']);
Route::get('/admin/viewfeedback',[AdminController::class,'viewfeedback']);
Route::get('/admin/quizdetail',[AdminController::class,'quizdetail']);
Route::get('/admin/questiondetail',[AdminController::class,'questiondetail']);
Route::get('/admin/removequiz',[AdminController::class,'removequiz']);
Route::post('/admin/savequiz',[AdminController::class,'savequiz']);
Route::post('/admin/savequestion',[AdminController::class,'savequestion']);
Route::get('/admin/respond/{topic}',[AdminController::class,'respondquestion']);
Route::get('/admin/assessments',[AdminController::class,'assessments']);
Route::post('/admin/saveanswer',[AdminController::class,'saveanswer']);


//User

Route::get('/user/home',[UserController::class,'home']);
Route::get('/user/history',[UserController::class,'history']);
Route::get('/user/rankinguser',[UserController::class,'rankinguser']);
Route::get('/user/exam',[UserController::class,'exam']);

