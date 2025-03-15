<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
	public function form()
	{
		return view('newsletters.form');
	}

	public function create(NewsletterRequest $request)
	{
		Newsletter::create(['email' => $request->email]);
		return redirect()
			->route('newsletters.index')
			->with('success', 'Inscription réussie !');
	}

	// Affiche la liste des emails inscrits
	public function index()
	{
		$newsletters = Newsletter::all();
		return view('newsletters.index', compact('newsletters'));
	}
}
