<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

// Auth::routes();

Route::post('/create', [CourseController::class, 'test']);

Route::group(['middleware' => 'keycloak-web'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/f2', [CourseController::class, 'test']);
    Route::get('/course', function () {

        $create = DB::table('course')
                        ->select('coursecode','courseinfo','coursetitle','category')
                        ->get();
    
        return view('course', ['create' => $create]);
    });
});

