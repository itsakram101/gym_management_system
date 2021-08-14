<?php

use App\Http\Controllers\DashboardCharts;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [DashboardCharts::class,"index"]);

Route::resource('/admins',AdminController::class);
Route::resource('/trainers',TrainerController::class);
Route::resource('/members',MemberController::class);
Route::resource('/equipments',EquipmentController::class);

Route::get('/aboutus', [AboutUsController::class,"index"]);
// Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'getDashboard'])->name('admin-dashboard');
Route::get('/schedule/add', [App\Http\Controllers\scheduleController::class,'add']);
Route::post('/schedule/add', [App\Http\Controllers\scheduleController::class,'store']);