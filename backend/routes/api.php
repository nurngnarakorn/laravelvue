<?php

use App\Http\Controllers\QuoteController;

Route::post('/quote', [QuoteController::class, 'submitQuote']);
