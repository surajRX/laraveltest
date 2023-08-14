<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\MyworldController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TurbineController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('product',[ProductController::class,'info']);
// Route::post('product',[ProductController::class,'save']);


//  Route::get('product', function () {
//      return view('World/product');
// });

// Route::get('world/info',[WorldController::class,'info']);
// Route::post('index',[WorldController::class,'save']);
// Route::get('/form',function(){
//     return view('product/form');
// });
// Route::get('table',function(){
//     return view('World/table');
// });
//  Route::get('user/user',[UserController::class,'info']);
//  Route::get('server',[ServerController::class,'server']);
//  Route::get('world',[WorldController::class,'world']);
// Route::get('index',[WorldController::class,'run']);
// Route::get('index',[WorldController::class,'run']);

// Route::get('table',[WorldController::class,'index']);
//  Route::get('World',[WorldController::class,'info']);
//  Route::post('World',[WorldController::class,'save']);

// Route::get('table',[TestController::class,'index']);
// Route::get('Testblade',[TestController::class,'info']);
// Route::post('Testblade',[TestController::class,'save']);

// Route::get('table',[HostController::class,'index']);
// Route::get('host',[HostController::class,'info']);
// Route::post('host',[HostController::class,'save']);
// Route::get('edit/{id}',[HostController::class,'edit']);
// Route::post('edit/{id}',[HostController::class,'update']);
// Route::get('delete/{id}',[HostController::class,'delete']);

Route::get('table',[PostController::class,'index']);
Route::get('host',[PostController::class,'info']);
Route::post('host',[PostController::class,'save']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('edit/{id}',[PostController::class,'update']);
Route::get('delete/{id}',[PostController::class,'delete']);


// Route::get('table1', [TurbineController::class, 'index']);
// Route::get('host', [TurbineController::class, 'info']);
// Route::post('host', [TurbineController::class, 'save']);
// Route::get('edit1/{id}', [TurbineController::class, 'edit']);
// Route::post('edit1/{id}', [TurbineController::class, 'update']);
// Route::get('delete1/{id}', [TurbineController::class, 'delete']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');