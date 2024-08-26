<?php

use App\Http\Controllers\CoverPolisController;
use App\Http\Controllers\DokumenTransmitalController;
use App\Http\Controllers\EndorsementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGroupController;
use App\Http\Controllers\SuratMedicalController;
use App\Http\Controllers\UnderwritingController;

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

// Surat Medical
Route::get('/bloodprofileavrist/cetakpdf', [SuratMedicalController::class, 'cetakpdf']);

// Cover Polis
Route::get('/coverpolis1/cetakpdf', [CoverPolisController::class, 'cetakpdf']);
Route::get('/coverpolis2/cetakpdf2', [CoverPolisController::class, 'cetakpdf2']);

// Underwriting
Route::get('/claimratio/cetakpdf', [UnderwritingController::class, 'cetakpdf']);
Route::get('/summary/cetakpdf2', [UnderwritingController::class, 'cetakpdf2']);
Route::get('/detailclaim/cetakpdf3', [UnderwritingController::class, 'cetakpdf3']);
Route::get('/guidelines/cetakpdf4', [UnderwritingController::class, 'cetakpdf4']);
Route::get('/PRv2.1.2022/cetakpdf5', [UnderwritingController::class, 'cetakpdf5']);
Route::get('/perhitunganprofitsharing/cetakpdf6', [UnderwritingController::class, 'cetakpdf6']);
Route::get('/perhitunganstoploss/cetakpdf7', [UnderwritingController::class, 'cetakpdf7']);
Route::get('/statementoflocallossfreeataullf/cetakpdf8', [UnderwritingController::class, 'cetakpdf8']);


// Dokument Transmital
Route::get('/transmitaladdress/cetakpdf', [DokumenTransmitalController::class, 'cetakpdf']);
Route::get('/transmitallist/cetakpdf2', [DokumenTransmitalController::class, 'cetakpdf2']);

// Endorsement
Route::get('/endorsement/cetakpdf', [EndorsementController::class, 'cetakpdf']);

// Data Group
// Aso Billing
Route::get('/[name]/cetakpdf', [DataGroupController::class, 'cetakpdf']);
Route::get('/[name]/cetakpdf2', [DataGroupController::class, 'cetakpdf2']);
Route::get('/[name]/cetakpdf3', [DataGroupController::class, 'cetakpdf3']);
Route::get('/[name]/cetakpdf4', [DataGroupController::class, 'cetakpdf4']);
Route::get('/[name]/cetakpdf5', [DataGroupController::class, 'cetakpdf5']);
// Polis Contract yang convent di group hospital
Route::get('/policyschedule/cetakpdf6', [DataGroupController::class, 'cetakpdf6']);
Route::get('/riderci/cetakpdf7', [DataGroupController::class, 'cetakpdf7']);
Route::get('/ridertpd/cetakpdf8', [DataGroupController::class, 'cetakpdf8']);
Route::get('/rideradd/cetakpdf9', [DataGroupController::class, 'cetakpdf9']);
Route::get('/supplementaryop/cetakpdf10', [DataGroupController::class, 'cetakpdf10']);
Route::get('/supplementarydep/cetakpdf11', [DataGroupController::class, 'cetakpdf11']);
Route::get('/supplementarydt/cetakpdf12', [DataGroupController::class, 'cetakpdf12']);
Route::get('/supplementaryjaminan/cetakpdf13', [DataGroupController::class, 'cetakpdf13']);
Route::get('/supplementarymt/cetakpdf14', [DataGroupController::class, 'cetakpdf14']);
Route::get('/supplementaryvs/cetakpdf15', [DataGroupController::class, 'cetakpdf15']);
// Polis Contract yang syariah di group hospital
Route::get('/policyschedulesyariah/cetakpdf16', [DataGroupController::class, 'cetakpdf16']);
Route::get('/ridercisyariah/cetakpdf17', [DataGroupController::class, 'cetakpdf17']);
Route::get('/ridertpdsyariah/cetakpdf18', [DataGroupController::class, 'cetakpdf18']);
Route::get('/rideraddsyariah/cetakpdf19', [DataGroupController::class, 'cetakpdf19']);
Route::get('/supplementaryopsyariah/cetakpdf20', [DataGroupController::class, 'cetakpdf20']);
Route::get('/supplementarydepsyariah/cetakpdf21', [DataGroupController::class, 'cetakpdf21']);
Route::get('/supplementarydtsyariah/cetakpdf22', [DataGroupController::class, 'cetakpdf22']);
Route::get('/supplementaryjaminansyariah/cetakpdf23', [DataGroupController::class, 'cetakpdf23']);
Route::get('/supplementarymtsyariah/cetakpdf24', [DataGroupController::class, 'cetakpd24']);
Route::get('/supplementaryvssyariah/cetakpdf25', [DataGroupController::class, 'cetakpd25']);
// Surat Pengantar Billing
Route::get('/billingmodal/cetakpdf26', [DataGroupController::class, 'cetakpdf26']);
Route::get('/billingrenewal/cetakpdf27', [DataGroupController::class, 'cetakpdf27']);
Route::get('/estimatebilling/cetakpdf28', [DataGroupController::class, 'cetakpdf28']);
