<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KDPController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/create-pdf', [KDPController::class, 'showPDFForm'])->name('createPDF');
Route::post('/generate-pdf', [KDPController::class, 'generatePDF'])->name('generatePDF');
