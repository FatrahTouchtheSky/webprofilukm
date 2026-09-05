<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminDashboardController;

//halaman PUBLIC
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);

//admin LOGIN
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware('auth:admin')
    ->name('admin.dashboard');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// admin NEWS
Route::get('/admin/addnews', [NewsController::class, 'create'])->name('admin.addnews');
Route::post('/admin/addnews', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

//admin gallery
Route::resource('admin/gallery', GalleryController::class);

//admin new member
// Route::get('/new_member/create', [MemberController::class, 'create'])->name('new_member.create');
// Route::post('/admin/new_members', [MemberController::class, 'store'])->name('new_member.store');
// Route::delete('/admin/new_members/{id}', [MemberController::class, 'destroy'])->name('new_member.destroy');
// Route::get('/admin/new_members', [MemberController::class, 'index'])->name('new_member.index');

// Route::resource('members', MemberController::class)->except(['edit', 'update']);
// web.php
// Route::get('/members', [MemberController::class, 'index'])->name('members.index');
// Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
// Route::post('/members', [MemberController::class, 'store'])->name('members.store');
// Route::delete('/members/{id}', [MemberController::class, 'destroy'])->name('members.destroy');


Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('students/success', [StudentController::class, 'success'])->name('students.success');
