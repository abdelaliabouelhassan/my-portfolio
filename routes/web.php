<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PortfolioController::class,'index']);
Route::post('/contact', [PortfolioController::class,'contact']);
Route::get('/my-work/{slug}', [PortfolioController::class,'show']);

//DOWNLOAD CV

Route::get('/download-cv', function () {
    return response()->download(public_path('cv/CV-Abdelali-Abouelhassan.pdf'));
});