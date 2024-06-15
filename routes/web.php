<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RecentpostController;
use App\Http\Controllers\KegiatanController;
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


Route::get('/', [UserController::class,'userview'])->name('user.index');
Route::get('/about', [UserController::class,'aboutview'])->name('user.about');
Route::get('/faq', [UserController::class,'faqview'])->name('user.faq');
Route::get('/team', [UserController::class,'teamview'])->name('user.team');
Route::get('/contact', [UserController::class, 'contactview'])->name('user.contact');
Route::post('/contact', [UserController::class, 'contactstore'])->name('contact.store');
Route::get('/berita', [BeritaController::class,'Berita'])->name('user.berita');
Route::get('/detailberita/{id}', [BeritaController::class,'BeritaShow'])->name('user.detailberita');
Route::get('/detailkegiatan/{id}', [KegiatanController::class,'KegiatanShow'])->name('user.detailkegiatan');
Route::post('/subscribe', [UserController::class, 'subscribe'])->name('subscribe');
Route::post('/komentar', [UserController::class, 'store'])->name('komentar.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
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

    //CRUD PROMO
    Route::get('/promo', [PromoController::class, 'index'])->name('promo.view');
    Route::get('/promo_add', [PromoController::class, 'create'])->name('promo.add');
    Route::post('/promo_store', [PromoController::class, 'store'])->name('promo.store');
    Route::get('/promo_edit/{id}', [PromoController::class, 'edit'])->name('promo.edit');
    Route::post('/promo_update/{id}', [PromoController::class, 'update'])->name('promo.update');
    Route::delete('/deletepromo/{id}', [PromoController::class, 'destroy'])->name('promo.delete');

    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.view');
    Route::get('/kegiatan_add', [KegiatanController::class, 'create'])->name('kegiatan.add');
    Route::post('/kegiatan_store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan_edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::post('/kegiatan_update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
    Route::delete('/deletekegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete');

    //CRUD BERITA
    Route::get('/beritaview', [BeritaController::class, 'index'])->name('berita.view');
    Route::get('/berita_add', [BeritaController::class, 'create'])->name('berita.add');
    Route::post('/berita_store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita_edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita_update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');

    //CRUD BERITA
    Route::get('/aboutview', [AboutController::class, 'index'])->name('about.view');
    Route::get('/about_add', [AboutController::class, 'create'])->name('about.add');
    Route::post('/about_store', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about_edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about_update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('/delete/{id}', [AboutController::class, 'destroy'])->name('about.delete');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
