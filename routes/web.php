<?php

use App\Http\Controllers\ProposeTalkController;
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

Route::get('/', function () {
    return view('frontend.page.home');
});

Route::get('privacy-policy', function () {
    return view('frontend.page.privacy');
})->name('privacy-policy');

Route::post('propose-talk', ProposeTalkController::class)
    ->name('propose-talk');
