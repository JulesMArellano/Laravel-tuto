@extends("default")

@section('title',$title);

@section('content')

<h1>{{$title}}</h1>

<p>Jules Michaël Arellano</p>

	<ul>
		@forelse($numbers as $number)
			<li>
				{{$number}}
			</li>
		@empty
			<li>
				Aucun chiffre
			</li>
		@endforelse
	</ul>

@endsection

@section('sidebar')

	@parent

	<h3>A propos</h3>

	<p>Side<p>

@endsection