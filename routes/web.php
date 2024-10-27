<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginAction'])->name('admin.login.submit');

// Admin Group Middleware
Route::prefix('/admin')->middleware(['auth','roles:admin,super_admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

    //Categories
    Route::get('/categories', [AdminController::class, 'showCategories'])->name('admin.categories');
    Route::get('/categories/add', [AdminController::class, 'addCategories'])->name('admin.categories.add');
    Route::post('/categories/add', [CategoriesController::class, 'storeCategories'])->name('admin.categories.store');
    Route::post('/categories/temp-upload', [AdminController::class, 'tempUpload'])->name('admin.categories.temp-upload');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
