<?php

use App\Http\Controllers\ReviewController;
use App\Models\Review;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/compare', function () {
    return view('compare');
});

Route::get('/compare', [ReviewController::class, 'show']);


Route::get('/info', function () {
    phpinfo();
});
