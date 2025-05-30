<?php

use App\Http\Controllers\SlipgajiController;
use Illuminate\Support\Facades\Route;

// ============== Start Sidebar Navbar Topbar ===============
Route::get('/', function () {
    return view('login/login');
});
Route::get('/login', function () {
    return view('login/login');
});
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/slip-gaji', function () {
    return view('slip-gaji/slip-gaji');
});
// ============== End Sidebar Navbar Topbar =================
Route::get('/slip-gaji',[SlipgajiController::class,'tampil'])->name('slip-gaji.slip-gaji');
Route::post('/slip-gaji/submit',[SlipgajiController::class,'submit'])->name('slipgaji.submit');

