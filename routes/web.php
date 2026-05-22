<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// ranu
use App\Http\Controllers\SellerController;

Route::get('/seller/create', [SellerController::class, 'create'])->name('seller.create');
Route::post('/seller', [SellerController::class, 'store'])->name('seller.store');
//

Route::get('', [PageController::class, 'index'])->name('index');
Route::get('loginForm', [PageController::class, 'loginForm'])->name('loginForm');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('cekResiPublic', [BarangController::class, 'cekResiPublic']);
Route::post('cekResiPublic', [BarangController::class, 'cekResiPublic'])->name('cekResiPublic');

Route::get('cekResi', [BarangController::class, 'cekResi']);
Route::post('cekResi', [BarangController::class, 'cekResi'])->name('cekResi');

Route::group(['middleware' => ['auth', 'isLogin', 'role:admin']], function () {
    Route::get('register', [PageController::class, 'register'])->name('register');
    Route::post('createUser', [AdminController::class, 'createUser'])->name('createUser');
    Route::get('editUserForm/{email}', [PageController::class, 'editUserForm'])->name('editUserForm');
    Route::post('editUser/{email}', [AdminController::class, 'editUser'])->name('editUser');
    Route::get('userList', [PageController::class, 'userList'])->name('userList');
    Route::delete('deleteUser/{email}', [AdminController::class, 'deleteUser'])->name('deleteUser');
    Route::get('navPage', [PageController::class, 'navPage'])->name('navPage');
    Route::get('adminPage', [PageController::class, 'adminPage'])->name('adminPage');
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('exportData', [ExportController::class, 'exportData'])->name('exportData');
});

Route::group(['middleware' => ['auth', 'isLogin', 'role:supervisor']], function () {
    Route::get('navPage', [PageController::class, 'navPage'])->name('navPage');
    Route::get('supervisorPage', [PageController::class, 'supervisorPage'])->name('supervisorPage');
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('userList', [PageController::class, 'userList'])->name('userList');
    Route::get('exportData', [ExportController::class, 'exportData'])->name('exportData');
});