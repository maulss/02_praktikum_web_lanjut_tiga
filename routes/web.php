<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maul;

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

// No 1
Route::get('/', function () {
    return ('Menampilkan halaman home');
});

// No 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return "Menampilkan halaman Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Menampilkan halaman Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        return "Menampilkan halaman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        return "Menampilkan halaman Kolak Kids Songs";
    });
});

//Number 3
Route::get('/news/{title?}', function ($title = null) {
    return $title;
});

//Number 4
Route::prefix('program')->group (function () {
    Route::get('/karir', function () {
        return "Menampilkan halaman program karir";
    });
    Route::get('/magang', function () {
        return "Menampilkan halaman program magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Menampilkan halaman program kunjungan industri";
    });
});

//Number 5
Route::get('/about', function () {
    return ('Menampilkan halaman About Us');
});

//Number 6
Route::resource('contact', Maul::class)->only([
    'index'
]);
