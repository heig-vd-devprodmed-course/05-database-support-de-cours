<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
	public function rendFormulaire()
	{
		return view('view_newsletter_formulaire');
	}

	public function traiteFormulaire(NewsletterRequest $request)
	{
		Newsletter::create(['email' => $request->email]);
		return view('view_newsletter_confirm_inscription');
	}
}
