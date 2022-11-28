<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<div id="menu">
	@foreach (range(1, 5) as $range)
		<a href="#">{{ 'Menu'.$range}}</a>
	@endforeach
</div>