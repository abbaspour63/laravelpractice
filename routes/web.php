<?php

use App\Http\Controllers\videoController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
//    return view('index');
//});
//Route::get('/videos',function (){
//   echo "hello from shiraz";
//});

//Route::get('/test',[\App\Http\Controllers\videoController::class,'index']);
//Route::get('/',[\App\Http\Controllers\Indexcontroller::class,'Index']);
Route::get('/',[\App\Http\Controllers\Indexcontroller::class,'index'])->name('index');


//Route::get('/upload',function (){
//   return view ('videos.create');
//});

Route::get('/videos/create',[\App\Http\Controllers\videoController::class,'create'])->name('videos.create');
Route::post('/videos', [\App\Http\Controllers\videoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}',[\App\Http\Controllers\videoController::class,'show'])->name('videos.show');
Route::get('/videos/{video}/edit',[videoController::class,'edit'])->name('videos.edit');




