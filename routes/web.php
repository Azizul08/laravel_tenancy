<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenancyController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/tenancy-register',[TenancyController::class,'createRegister'])->name('tenancy.register');
Route::post('/tenancy-register',[\App\Http\Controllers\TenancyController::class,'createPostRegister'])->name('tenancy.postregister');;
require __DIR__.'/auth.php';
