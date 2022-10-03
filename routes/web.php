<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KategoriBeritaController; 
use App\Http\Controllers\BeritaController;//load controller post
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\fotogalleryController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('layouts.frontend.landingpage');
});

Route::get('/detail', function () {
    return view('layouts.frontend.detailberita');
});



Route::get('/about', function () {
    return view('layouts.frontend.about',[
        "nama" => "Abdul Hamid",
        "email" => "abd.hamid19@gmail.com",
        "image" => "hamid.jpg"

    ]);
});

Route::get('/visimisi', function () {
    return view('layouts.frontend.detailvisimisi');
});

Route::get('/kategori', function () {
    return view('layouts.frontend.kategori');
});

Route::get('/tugasfungsi', function () {
    return view('layouts.frontend.tugasfungsi');
});

Route::get('/detailunitkerja/{id}', [PegawaiController::class, 'view'])->name('viewunitkerja');


Route::get('/struktur', function () {
    return view('layouts.frontend.profile.struktur');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Landingpage
Route::get('/',[App\Http\Controllers\BeritaController::class, 'index']);

Route::get('/detail/{post:slug}', [App\Http\Controllers\BeritaController::class, 'readmore']);
//Route::get('/detail/{post}', [App\Http\Controllers\BeritaController::class, 'show']);



Route::prefix('admin')
->namespace('Admin')
->middleware(['auth','admin'])
->group(function(){
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');
    });

Route::post('auth.login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Auth::routes(['verify' => true]);
Route::get('/kategori/{kategori:slug}', function(Kategori $kategori){
return view('layouts.frontend.kategori', [
    'title' => $kategori->nama,
    'posts' => $kategori->posts,
    'kategori' => $kategori
]);
});

Route::get('/kategoriberita', function(){
    return view('pages.admin.kategori-berita.index');
});


Route::get('/tampildata', function(){
    return view('pages.admin.kategori-berita.tampildata');
});


//Kategori Berita
route::get('/kategoriberita',[App\Http\Controllers\Admin\KategoriBeritaController::class, 'index'])->name('kategori');
route::post('/kategoriberita',[KategoriBeritaController::class, 'create'])->name('tambahkategori')->name('tambahkategori');
route::get('/tampildata/{id}',[KategoriBeritaController::class, 'tampildata'])->name('tampildata');
route::post('/updatedata/{id}',[KategoriBeritaController::class, 'updatedata'])->name('updatedata');
route::get('/hapusdata/{id}',[KategoriBeritaController::class, 'hapusdata'])->name('hapusdata');

//Daftar Berita
route::get('/daftarberita',[BeritaController::class, 'adminberita'])->name('adminberita');
route::get('/tambahberita',[BeritaController::class, 'tambahberita'])->name('tambahberita');
route::get('/tampilkategori',[BeritaController::class, 'tampilkategori'])->name('tampilkategori');
route::post('/daftarberita',[BeritaController::class, 'create'])->name('createberita');
route::get('/editberita/{id}',[BeritaController::class, 'tampiledit'])->name('tampiledit');
route::post('/updateberita/{id}',[BeritaController::class, 'edit'])->name('editberita');
Route::get('/viewberita/{post:slug}', [BeritaController::class, 'view'])->name('viewberita');
route::get('/hapusberita/{id}',[BeritaController::class, 'hapusdata'])->name('hapusdata');


//Daftar Jabatan
route::get('/daftarjabatan',[JabatanController::class, 'tampiljabatan'])->name('jabatan');
route::post('/daftarjabatan',[JabatanController::class, 'tambahjabatan'])->name('tambahjabatan');
route::get('/editjabatan/{id}',[JabatanController::class, 'editjabatan'])->name('editjabatan');
route::post('/updatejabatan/{id}',[JabatanController::class, 'updatejabatan'])->name('updatejabatan');
route::get('/hapusjabatan/{id}',[JabatanController::class, 'hapusdata'])->name('hapusdata');

//Daftar Pegawai
route::get('/daftarpegawai',[PegawaiController::class, 'tampilpegawai'])->name('tampilpegawai');
route::post('/daftarpegawai',[PegawaiController::class, 'create'])->name('createpegawai');
route::get('/tambahpegawai',[PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
route::get('/tampilpegawai/{id}',[PegawaiController::class, 'editpegawai'])->name('editpegawai');
route::post('/updatepegawai/{id}',[PegawaiController::class, 'updatepegawai'])->name('updatepegawai');
route::get('/hapuspegawai/{id}',[PegawaiController::class, 'hapusdata'])->name('hapusdata');

//Image Gallery
route::get('/daftarfoto',[fotogalleryController::class, 'tampilfoto'])->name('tampilfoto');
route::post('/daftarfoto',[fotogalleryController::class, 'create'])->name('createfoto');
route::get('/tambahfoto',[fotogalleryController::class, 'tambahfoto'])->name('tambahfoto');
route::get('/editfoto/{id}',[fotogalleryController::class, 'editfoto'])->name('editfoto');
route::post('/updatefoto/{id}',[fotogalleryController::class, 'updatefoto'])->name('updatefoto');
route::get('/hapusfoto/{id}',[fotogalleryController::class, 'hapusdata'])->name('hapusdata');

//Video Gallery
route::get('/daftarvideo',[VideoGalleryController::class, 'tampilvideo'])->name('tampilvideo');
route::post('/daftarvideo',[VideoGalleryController::class, 'create'])->name('createvideo');
route::get('/tambahvideo',[VideoGalleryController::class, 'tambahvideo'])->name('tambahvideo');
route::get('/tampilvideo/{id}',[VideoGalleryController::class, 'editvideo'])->name('editvideo');
route::post('/updatevideo/{id}',[VideoGalleryController::class, 'updatevideo'])->name('updatevideo');
route::get('/hapusvideo/{id}',[VideoGalleryController::class, 'hapusdata'])->name('hapusdata');


//Podcast Gallery
route::get('/daftarpodcast',[PegawaiController::class, 'tampilpodcast'])->name('tampilpodcast');
route::post('/daftarpodcast',[PegawaiController::class, 'create'])->name('createpodcast');
route::get('/tambahpodcast',[PegawaiController::class, 'tambahpodcast'])->name('tambahpodcast');
route::get('/tampilpodcast/{id}',[PegawaiController::class, 'editpodcast'])->name('editpodcast');
route::post('/updatepodcast/{id}',[PegawaiController::class, 'updatepodcast'])->name('updatepodcast');
route::get('/hapuspodcast/{id}',[PegawaiController::class, 'hapusdata'])->name('hapusdata');