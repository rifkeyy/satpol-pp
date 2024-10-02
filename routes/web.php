<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'homepage']);

Route::get('/profil', function () {
    return view('about');
})->name('profil');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home', [Homecontroller::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/homepage', [HomeController::class, 'homepage']);

Route::get('/struktur_organisasi', [HomeController::class, 'struktur_organisasi']);

Route::get('/tupoksi', [HomeController::class, 'tupoksi']);

Route::get('/susunan_organisasi', [HomeController::class, 'susunan_organisasi']);

Route::get('/berita', [HomeController::class, 'berita']);

Route::get('/galeri', [HomeController::class, 'galeri']);

Route::get('/informasi_kegiatan', [HomeController::class, 'informasi_kegiatan']);

Route::get('/permohonan_informasi', [HomeController::class, 'permohonan_informasi']);

Route::get('/permohonan_keberatan', [HomeController::class, 'permohonan_keberatan']);

Route::get('/adminhome', [AdminController::class, 'adminhome']);

Route::get('/post_page', [AdminController::class, 'post_page']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/show_post', [AdminController::class, 'show_post']);

Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);

Route::post('/update_post/{id}', [AdminController::class, 'update_post']);

Route::get('/post_details/{id}', [HomeController::class, 'post_details']);

Route::get('/create_post', [HomeController::class, 'create_post'])->middleware('auth');

Route::post('/user_post', [HomeController::class, 'user_post'])->middleware('auth');

Route::get('/my_post', [HomeController::class, 'my_post'])->middleware('auth');

Route::get('/my_post_del/{id}', [HomeController::class, 'my_post_del'])->middleware('auth');

Route::get('/post_update_page/{id}', [HomeController::class, 'post_update_page'])->middleware('auth');

Route::post('/update_post_data/{id}', [HomeController::class, 'update_post_data'])->middleware('auth');

Route::get('/map', 'MapController@index')->name('map');

// sejarah
Route::get('/inputsejarah', [AdminController::class, 'inputsejarah']);
Route::post('/sejarah', [AdminController::class, 'sejarah']);
Route::get('/sejarah', function() {
    $sejarahs =DB::table('sejarahs')->get();
    return view('home/sejarah', ['sejarah' =>$sejarahs]);

});

Route::get('show_sejarah', [AdminController::class, 'show_sejarah']);
Route::get('/edit_sejarah/{id}', [AdminController::class, 'edit_sejarah']);

    

//tupoksi 
Route::get('/input_tupoksi', [AdminController::class, 'input_tupoksi']);
Route::post('/tupoksi', [AdminController::class, 'tupoksi']);
Route::get('/tupoksi', function() {
    $tupoksis =DB::table('tupoksis')->get();
    return view('home/tupoksi', ['tupoksi' =>$tupoksis]);

});

// susunan organisasi
Route::get('/input_susunanorganisasi', [AdminController::class, 'input_susunanorganisasi']);
Route::post('/susunan_organisasi', [AdminController::class, 'susunan_organisasi']);
Route::get('/susunan_organisasi', function() {
    $susunan_organisasis =DB::table('susunan_organisasis')->get();
    return view('home/susunan_organisasi', ['susunan_organisasi' =>$susunan_organisasis]);
});

// gallery
Route::get('/post_galeri', [AdminController::class, 'post_galeri']);
Route::post('/post_galeri', [AdminController::class, 'post_galeri']);
Route::get('/galeri', function() {
    $galeri =DB::table('galeri')->get();
    return view('home/galeri', ['galeri' =>$galeri]);
});