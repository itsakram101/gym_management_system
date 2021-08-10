<?php
use App\Http\Controllers\TrainersController;

Route::get('/', [App\Http\Controllers\trainer\trainerController::class,'getDashboard'])->name('trainers-dashboard');
