<?php

Route::get('/', [App\Http\Controllers\member\memberController::class,'getDashboard'])->name('members-dashboard');
// Route::get('/dashboard', [App\Http\Controllers\MemberController::class,'getDashboard'])->name('member-dashboard');
