<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Auth::routes();
Route::get('/', function () {
    return redirect()->route('tasks.index');
});
Route::get('/home', function () {
    return redirect()->route('tasks.index');
});
Route::group(['middleware'=>'auth'], function (){
    Route::resource('tasks', TaskController::class);
    Route::get('tasks/{task}/toggle', [TaskController::class, 'toggleComplete'])->name('tasks.toggle');
});



Route::get('/index', [HomeController::class, 'index'])->name('index');

