@extends('default')

@section('content')

<h1>Raccourcir un nouveau lien</h1>

<form action="{{ route('link.store') }}" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="div.form-group">

		<label for="url">Lien à raccourcir</label>

		<input type="text" name="url" id="url" placeholder="http://...." class="form-control">

	</div>

	<div>
	
		<button class="btn btn-primary">Raccourcir</button>

	</div>
</form>

@stop