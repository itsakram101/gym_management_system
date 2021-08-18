<?php
use App\Http\Controllers\TrainersController;

Route::get('/', [App\Http\Controllers\trainer\trainerController::class,'getDashboard'])->name('trainers-dashboard');
// Route::get('/members', [App\Http\Controllers\trainer\trainerController::class,'getMembers'])->name('trainers-members');
// Route::get('/sports', [App\Http\Controllers\trainer\trainerController::class,'getSports'])->name('trainers-sports');