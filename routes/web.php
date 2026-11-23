<?php

use App\Http\Controllers\LamaranController;

Route::get('/', [LamaranController::class, 'index']);

Route::post('/lamaran', [LamaranController::class, 'store'])
    ->name('lamaran.store');