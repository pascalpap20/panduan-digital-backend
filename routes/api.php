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

Route::post("add-tertarik-elektif", [TertarikElektifController::class, 'add']);
Route::get("list-tertarik-elektif/{id?}", [TertarikElektifController::class, 'getListTertarikElektif']);
Route::delete("delete-tertarik-elektif/{id?}",[TertarikElektifController::class, 'deleteTertarikElektif'] );


Route::post("/log-in", [UserByMySelfController::class, 'login']);
Route::get("/users", [UserByMySelfController::class, 'users']);

Route::post("/add-mk-elektif", [MataKuliahElektifController::class, 'add']);
Route::get("/list-mk-elektif/{id?}", [MataKuliahElektifController::class, 'getListMataKuliahElektif']);
