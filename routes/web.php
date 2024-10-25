<?php

use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [OffersController::class, 'index'])->name('index');

Route::post('/index', [OffersController::class, 'store'])->name('index.store');

Route::get('/index', [OffersController::class, 'acceptOffers'])->name('accept_offers');


