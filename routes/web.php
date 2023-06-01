<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'cover');
Route::view('/whoami', 'whoami');
Route::view('/begin', 'begin');
Route::view('/basics', 'basics');
Route::view('/targets', 'targets');
Route::view('/triggers', 'triggers');
Route::view('/swap', 'swap');
Route::view('/search', 'search');
Route::view('/server', 'server');
Route::view('/more', 'more');
Route::view('/thanks', 'thanks');

Route::view('/demos/basic_button', 'demos.basic_button');
Route::view('/demos/targets', 'demos.targets');
Route::view('/demos/triggers', 'demos.triggers');
Route::view('/demos/triggers/result', 'demos.triggers.result');
Route::view('/demos/swap/{strategy}', 'demos.swap');
Route::any('/demos/server', fn() => view('demos.server'));
Route::get('/demos/search', SearchController::class);
