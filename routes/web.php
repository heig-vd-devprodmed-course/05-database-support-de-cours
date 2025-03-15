<?php

use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsletterController;

Route::get('/newsletters/form', [NewsletterController::class, 'form'])->name(
	'newsletters.form',
);
Route::post('/newsletters', [NewsletterController::class, 'create'])->name(
	'newsletters.create',
);

Route::get('/newsletters', [NewsletterController::class, 'index'])->name(
	'newsletters.index',
);
