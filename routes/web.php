<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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


Route::get('/',[PageController::class,'home'])->name('frontend.home');
Route::get('/about',[PageController::class,'about'])->name('frontend.about');
Route::get('/portfolio',[PageController::class,'portfolio'])->name('frontend.portfolio');
Route::get('/team',[PageController::class,'team'])->name('frontend.team');
Route::get('/service',[PageController::class,'service'])->name('frontend.service');
Route::get('/contact',[PageController::class,'contact'])->name('frontend.contact');

// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('member', MemberController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('project', ProjectController::class);
});

require __DIR__.'/auth.php';