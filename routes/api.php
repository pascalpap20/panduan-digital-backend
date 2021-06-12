<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mata_kuliah_controller;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\TertarikElektifController;
use App\Http\Controllers\UserByMySelfController;
use App\Http\Controllers\MataKuliahElektifController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("add",[mata_kuliah_controller::class, 'add']);
Route::get("list-mata-kuliah/{id?}", [mata_kuliah_controller::class, 'getListMataKuliah']);
Route::get("list-tertarik-elektif-oop/{id?}", [mata_kuliah_controller::class, 'getListMataKuliahElektif']);

Route::post("add-departemen", [DepartemenController::class, 'add']);
Route::get("list-departemen/{id?}", [DepartemenController::class, 'getListDepartemen']);

Route::post("add-komentar", [KomentarController::class, 'add']);
Route::get("list-komentar/{id?}", [KomentarController::class, 'getListKomentar']);
Route::put("edit-komentar", [KomentarController::class, 'editKomentar']);


Route::post("add-tertarik-elektif", [TertarikElektifController::class, 'add']);
Route::get("list-tertarik-elektif/{id?}", [TertarikElektifController::class, 'getListTertarikElektif']);
Route::delete("delete-tertarik-elektif/{id?}",[TertarikElektifController::class, 'deleteTertarikElektif'] );


Route::post("/log-in", [UserByMySelfController::class, 'login']);
Route::get("/users", [UserByMySelfController::class, 'users']);

Route::post("/add-mk-elektif", [MataKuliahElektifController::class, 'add']);
Route::get("/list-mk-elektif/{id?}", [MataKuliahElektifController::class, 'getListMataKuliahElektif']);


// REPO TEST
// routing matakuliah biasa
Route::get("/test-repo/{id?}", [mata_kuliah_controller::class, 'getMataKuliah']);
Route::post("/test-add-repo", [mata_kuliah_controller::class, 'addData']);
// routing mata kuliah elektif
Route::get("/test-repo-elektif/{id?}", [mata_kuliah_controller::class, 'getMataKuliahElektif']);

// routing tertarik elektif
Route::get("/repo-list-tertarik/{id?}", [TertarikElektifController::class, 'getMataKuliahElektif']);
Route::post("/repo-add-tertarik", [TertarikElektifController::class, 'addTertarik']);
Route::delete("/repo-delete-tertarik/{id?}",[TertarikElektifController::class, 'deleteTertarikElektif'] );

// routing komentar
Route::get("/repo-list-komentar/{id?}", [KomentarController::class, 'getListKomentar']);
Route::post("/repo-add-komentar", [KomentarController::class, 'add']);
Route::put("/repo-edit-komentar", [KomentarController::class, 'editKomentar']);
Route::delete("/repo-delete-komentar/{id?}", [KomentarController::class, 'deleteKomentar']);