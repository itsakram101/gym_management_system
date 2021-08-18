<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

// gives authentification routes
Auth::routes();
// after login redirect to dashboard home by role
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function(){return view('about-us');});

// grouping admin routes
Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function () {
    require_once __DIR__.'/custom/admin.php';
});
// grouping admin trainer
Route::middleware(['auth', 'trainer'])->prefix('/trainer')->group(function () {
    require_once __DIR__.'/custom/trainer.php';
});
// grouping admin member
Route::middleware(['auth', 'member'])->prefix('/member')->group(function () {
    require_once __DIR__.'/custom/member.php';
});

Route::get('/logout', function (Request $request) {
    Session::flush();
    return redirect('/login');
});