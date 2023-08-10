<?php

use App\Http\Controllers\AccountControlelr;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionControlelr;
use App\Http\Controllers\TeacherController;
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
    return view('index');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/bystudy', function () {
    return view('consource.bank');
});
Route::get('/free_session',[SessionControlelr::class,'free_session']);
Route::get('/free_resource/{id}',[SessionControlelr::class,'free_resource']);

Route::get('/paid_session',[SessionControlelr::class,'paid_session']);
Route::get('/paid_resource/{id}',[SessionControlelr::class,'paid_resource']);

Route::get('/login',[AccountControlelr::class ,'login']);
Route::post('/login_account',[AccountControlelr::class,'login_account']);

Route::get('/resign', [AccountControlelr::class,'resign']);
Route::post('/resign_account',[AccountControlelr::class,'resign_account']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/session',SessionControlelr::class);
Route::resource('/lession',LessionController::class);
Route::resource('/account',AccountControlelr::class);
Route::resource('/teacher',TeacherController::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
