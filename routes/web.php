<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MovieController;
/*
|-------------------------------------------------------------------------
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

// [station1] API
// Route::get('/practice', function () {
//     return response('practice');
// });
// 
// Route::get('/practice2', function () {
//     $test = 'practice2';
//     return response($test);
// });
// 
// Route::get('/practice3', function () {
//     $test = 'test';
//     return response($test);
// });

// [station2] HTML Page (blade)
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);
Route::get('/getPractice', [PracticeController::class, 'getPractice']);
Route::get('/movies', [MovieController::class, 'movies']);

// [station7] admin page (blade)
Route::prefix('admin')->group(function () {
    Route::get('/movies', [MovieController::class, 'admin']);
});
