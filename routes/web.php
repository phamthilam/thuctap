<?php

use App\Http\Controllers\UserController;
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
Route::get('/',[UserController::class,'index'])->name('listUser');
Route::get('addUser',[UserController::class,'create'])->name('addUser');
Route::post('addPostUser',[UserController::class,'store'])->name('addPostUser');
Route::get('detailUser/{id}',[UserController::class,'show'])->name('detailUser');
Route::get('editUser/{id}',[UserController::class,'edit'])->name('editUser');
Route::put('updateUser/{id}',[UserController::class,'update'])->name('updateUser');
Route::get('deleteUser/{id}',[UserController::class,'destroy'])->name('deleteUser');