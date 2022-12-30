<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\barang_masukController;
use App\Http\Controllers\rakController;
use App\Http\Controllers\barang_keluarController;


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
    return redirect(route("login"));
});

// Route::get('/home', function () {
//     return view('home');
// })->name("home");

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name("forgot-password");




Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::get("/home", [UserController::class, "home"])->name("home")->middleware('auth');
Route::get("/home/user", [UserController::class, "homeUser"])->name("home_user")->middleware('auth');

Route::get("/register", [UserController::class, "register"])->name("register");
Route::post("/register/simpan", [UserController::class, "register_simpan"])->name("register_simpan")->middleware('auth');
Route::get("/user/tampil",[UserController::class,"tampil"])->name("user_all")->middleware('auth');
Route::get("/user/input",[UserController::class,"formInput"])->name("user_input")->middleware('auth');
Route::post("/user/simpan",[UserController::class,"simpan"])->name("user_simpan")->middleware('auth');
Route::get("/user/edit/{id}",[UserController::class,"formEdit"])->name("user_edit")->middleware('auth');
Route::put("/user/update/{id}",[UserController::class,"update"])->name("user_update")->middleware('auth');
Route::delete("/user/hapus/{id}",[UserController::class,"hapus"])->name("user_hapus")->middleware('auth');
Route::get("/user/tampil/{id}",[UserController::class,"user_show"])->name("user_show")->middleware('auth');


Route::get("/barang/buat", [barangController::class, 'buatbarang'])->name("buatbarang");
Route::get("/barang/tampil", [barangController::class, 'tampilbarang'])->name("tampilbarang");
Route::get("/barang/tambah", [barangController::class, 'tambahbarang'])->name("tambahbarang");
Route::get("/barang/semua", [barangController::class, 'semuabarang'])->name("semuabarang");
Route::post("/barang/simpan", [barangController::class, 'simpanbarang'])->name("simpanbarang");
Route::get("/barang/show/{id}", [barangController::class, 'showbarang'])->name("showbarang");
Route::get("/barang/edit/{id}", [barangController::class, 'editbarang'])->name("editbarang");
Route::put("/barang/update/{id}", [barangController::class, 'updatebarang'])->name("updatebarang");
Route::delete("/barang/hapus/{id}", [barangController::class, 'hapusbarang'])->name("hapusbarang");


// Route::get("/buatbarang", [barangController::class, 'buatbarang'])->name("buatbarang");
// Route::get("/tampilbarang", [barangController::class, 'tampilbarang'])->name("tampilbarang");
// Route::get("/tambahbarang", [barangController::class, 'tambahbarang'])->name("tambahbarang");
// Route::get("/semuabarang", [barangController::class, 'semuabarang'])->name("semuabarang");
// Route::post("/simpanbarang", [barangController::class, 'simpanbarang'])->name("simpanbarang");
// Route::get("/showbarang{id}", [barangController::class, 'showbarang'])->name("showbarang");
// Route::get("/editbarang{id}", [barangController::class, 'editbarang'])->name("editbarang");
// Route::put("/updatebarang{id}", [barangController::class, 'updatebarang'])->name("updatebarang");
// Route::delete("/baranghapus{id}", [barangController::class, 'hapusbarang'])->name("hapusbarang");


Route::get("/rak/buat", [rakController::class, 'buatrak'])->name("buatrak");
Route::post("/rak/simpan", [rakController::class, 'simpanrak'])->name("simpanrak");
Route::get("/rak/tampil/{id}", [rakController::class, 'tampilrak'])->name("tampilrak");
Route::get("/rak/semua", [rakController::class, 'semuarak'])->name("semuarak");
Route::get("/rak/ubah/{id}", [rakController::class, 'ubahrak'])->name("ubahrak");
Route::post("/rak/update/{id}", [rakController::class, 'updaterak'])->name("updaterak");
Route::delete("/rak/hapus/{id}", [rakController::class, 'hapusrak'])->name("hapusrak");


Route::get("/barang_masuk/buat", [barang_masukController::class, 'buatbarang_masuk'])->name("buat_barang_masuk");
Route::post("/barang_masuk/simpan", [barang_masukController::class, 'simpanbarang_masuk'])->name("simpan_barang_masuk");
Route::get("/barang_masuk/tampil/{id}", [barang_masukController::class, 'tampilbarang_masuk'])->name("tampil_barang_masuk");
// Route::get("/barang_masuk/tampil/{id}", [barang_masukController::class, 'tampilbarang_masuk'])->name("tampil_barang_masuk");
Route::get("/barang_masuk/semua", [barang_masukController::class, 'semuabarang_masuk'])->name("semua_barang_masuk");
Route::get("/barang_masuk/ubah/{id}", [barang_masukController::class, 'ubahbarang_masuk'])->name("ubah_barang_masuk");
Route::put("/barang_masuk/update/{id}", [barang_masukController::class, 'updatebarang_masuk'])->name("update_barang_masuk");
Route::delete("/barang_masuk/hapus/{id}", [barang_masukController::class, 'hapusbarang_masuk'])->name("hapus_barang_masuk");


Route::get("/barang_keluar/buat", [barang_keluarController::class, 'buatbarang_keluar'])->name("buat_barang_keluar");
Route::post("/barang_keluar/simpan", [barang_keluarController::class, 'simpanbarang_keluar'])->name("simpan_barang_keluar");
Route::get("/barang_keluar/tampil/{id}", [barang_keluarController::class, 'tampilbarang_keluar'])->name("tampil_barang_keluar");
// Route::get("/barang_keluar/tampil/{id}", [barang_keluarController::class, 'tampilbarang_keluar'])->name("tampil_barang_keluar");
Route::get("/barang_keluar/semua", [barang_keluarController::class, 'semuabarang_keluar'])->name("semua_barang_keluar");
Route::get("/barang_keluar/ubah/{id}", [barang_keluarController::class, 'ubahbarang_keluar'])->name("ubah_barang_keluar");
Route::put("/barang_keluar/update/{id}", [barang_keluarController::class, 'updatebarang_keluar'])->name("update_barang_keluar");
Route::delete("/barang_keluar/hapus/{id}", [barang_keluarController::class, 'hapusbarang_keluar'])->name("hapus_barang_keluar");