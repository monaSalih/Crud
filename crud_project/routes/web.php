<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyController;

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

Route::get('/candyData',[CandyController::class,'index']);
Route::get('/delete/id/{id}',[CandyController::class,'delete']);
Route::get('/addData',[CandyController::class,'addItem']);
Route::post('/addData',[CandyController::class,'saveItem']);
Route::get('/update/id/{id}',[CandyController::class,'updatePage']);
Route::put('/update/id/{id}',[CandyController::class,'update']);
