<?php

use App\Http\Controllers\CoverPolisController;
use App\Http\Controllers\DokumenTransmitalController;
use App\Http\Controllers\EndorsementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
    return view('dashboard', [
        "title" => "Avrist"
    ]);
});

// Cover Polis
Route::get('/coverpolis1/cetakpdf', [CoverPolisController::class, 'cetakpdf']);
Route::get('/coverpolis2/cetakpdf2', [CoverPolisController::class, 'cetakpdf2']);

// Transmital Address
Route::get('/transmitaladdress/cetakpdf', [DokumenTransmitalController::class, 'cetakpdf']);
Route::get('/transmitallist/cetakpdf2', [DokumenTransmitalController::class, 'cetakpdf2']);

// Endorsement
Route::get('/endorsement/cetakpdf', [EndorsementController::class, 'cetakpdf']);
