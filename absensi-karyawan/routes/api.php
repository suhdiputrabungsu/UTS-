<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsensiController;

Route::apiResource('karyawan', KaryawanController::class);
Route::apiResource('absensi', AbsensiController::class);

