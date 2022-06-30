<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


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

// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('/', function() {
    // return view('welcome', ['users'=> App\User::all]);
    // return 'ok';
// });


Route::get('/', [BukuController::class, 'index']);
Route::get('/ok', [BukuController::class, 'index1']);


