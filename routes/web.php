<?php
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

use App\Http\Controllers\UserController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::get('/upload', 'App\Http\Controllers\PagesController@upload');

Route::get('/service/{id}', function ($id) {
    return view('pages.service', [
        'service' => Service::find($id)
    ]);
});

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



//
//Route::get('/hello', function () {
//    return '<h1>Hello world</h1>';
//});
//
//Route::get('/about', function () {
//    return view('pages.about');
//});
//
//Route::get('/user/{id}', function ($id) {
//    return 'This is user id:' . $id;
//});
