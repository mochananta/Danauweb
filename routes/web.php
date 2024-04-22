<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RecentpostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('user.index');
});
Route::get('/about', [UserController::class,'aboutview'])->name('user.about');
Route::get('/faq', [UserController::class,'faqview'])->name('user.faq');
Route::get('/team', [UserController::class,'teamview'])->name('user.team');
Route::get('/berita', [BeritaController::class,'Berita'])->name('user.berita');
Route::get('/detailberita/{id}', [BeritaController::class,'BeritaShow'])->name('user.detailberita');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    //CRUD BERITA
    Route::get('/view', [BeritaController::class, 'index'])->name('berita.view');
    Route::get('/berita_add', [BeritaController::class, 'create'])->name('berita.add');
    Route::post('/berita_store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita_edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita_update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');

    //CRUD POSTINGAN TERBARU
    Route::get('/recentpost', [RecentpostController::class, 'index'])->name('recentpost.view');
    Route::get('/recentpost_add', [RecentpostController::class, 'create'])->name('recentpost.add');
    Route::post('/recentpost_store', [RecentpostController::class, 'store'])->name('recentpost.store');
    Route::get('/recentpost_edit/{id}', [RecentpostController::class, 'edit'])->name('recentpost.edit');
    Route::post('/recentpost_update/{id}', [RecentpostController::class, 'update'])->name('recentpost.update');
    Route::delete('/deleterecentpost/{id}', [RecentpostController::class, 'destroy'])->name('recentpost.delete');

});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
