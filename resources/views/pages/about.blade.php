@extends('app')

@section('content')

<h1>About</h1>
@if (count($people))
<h3>People I Like:</h3>

<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach
</ul>
@endif
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ullam tempore possimus, amet cupiditate maxime magnam aspernatur, ipsum est quis necessitatibus illo consectetur reiciendis nesciunt sint a cum. Beatae, officia!
</p>

@stop