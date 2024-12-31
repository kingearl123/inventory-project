<?php


use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('karyawans', KaryawanController::class);
Route::apiResource('barangs', BarangController::class);
Route::apiResource('pemasukans', PemasukanController::class);
Route::apiResource('pengeluarans', PengeluaranController::class);
Route::apiResource('users', UserController::class);