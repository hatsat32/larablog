<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\YaziController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/yazi/{slug}', [HomeController::class, 'yazi'])->name('pub_yazi');

Route::prefix('admin')->group(function () {
    Route::get('/', [Dashboard::class, 'index']);

    Route::get('kullanicilar', function () {
        return "kullanicilar";
    });

    Route::prefix('kategoriler')->group(function () {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori');
        Route::get('/ekle', [KategoriController::class, 'ekle'])->name('kategori_ekle');
        Route::post('/', [KategoriController::class, 'kaydet'])->name('kategori_kaydet');
        Route::get('/{id}', [KategoriController::class, 'detay'])->name('kategori_detay');
        Route::post('/{id}', [KategoriController::class, 'guncelle'])->name('kategori_guncelle');
        Route::post('/{id}/sil', [KategoriController::class, 'sil'])->name('kategori_sil');
    });

    Route::prefix('yazilar')->group(function () {
        Route::get('/', [YaziController::class, 'index'])->name('yazi');
        Route::get('/ekle', [YaziController::class, 'ekle'])->name('yazi_ekle');
        Route::post('/', [YaziController::class, 'kaydet'])->name('yazi_kaydet');
        Route::get('/{id}', [YaziController::class, 'detay'])->name('yazi_detay');
        Route::post('/{id}', [YaziController::class, 'guncelle'])->name('yazi_guncelle');
        Route::post('/{id}/sil', [YaziController::class, 'sil'])->name('yazi_sil');
    });
});
