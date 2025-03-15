<!-- resources/views/view_newsletter_index.blade.php -->
@extends('template')

@section('titre')
	Liste des inscriptions à la newsletter
@endsection

@section('contenu')
	@if (session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	<h2>Liste des abonnés</h2>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Email</th>
				<th>Date d'inscription</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($newsletters as $newsletter)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $newsletter->email }}</td>
					<td>{{ $newsletter->created_at->format('d/m/Y H:i') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<a href="{{ route('newsletters.form') }}" class="btn btn-primary">
		Ajouter une adresse
	</a>
@endsection
