<?php

use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsletterController;

Route::get('/newsletter', [NewsletterController::class, 'rendFormulaire']);
Route::post('/newsletter', [NewsletterController::class, 'traiteFormulaire']);

Route::get('/emails', function () {
	return Newsletter::all();
});
