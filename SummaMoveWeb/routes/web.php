<?php

use App\Http\Controllers\OefeningenController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/createoefeningen', function () {
    return view('OefeningenCreate');
});
Route::post('/login', [Usercontroller::class, 'login'] );
Route::get('/oefeningen', [OefeningenController::class, 'index']);
Route::post('createoefening', [OefeningenController::class, 'store'] );
Route::delete('removeoefening/{id}', [OefeningenController::class, 'destroy'] );