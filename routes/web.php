<?php

use App\Http\Controllers\SubjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[SubjectController::class,'index'])->name('subject.index');
Route::get('/create',[SubjectController::class,'create'])->name('subject.create');
Route::post('/subjects',[SubjectController::class,'store'])->name('subject.store');