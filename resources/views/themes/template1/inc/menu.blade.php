<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@php
$menus = [
	[
		'href'  => url('/'),
		'label' => 'หน้าแรก',
	], 
	[
		'href' => 'order',
		'label' => 'ออเดอร์',
	], 
	[
		'href' => 'pause-order',
		'label' => 'ออเดอร์ที่พักไว้'
	]
];
@endphp

<div id="menu">
	@foreach ($menus as $menu)
		<a href="{{ $menu['href'] }}">{{ $menu['label'] }}</a>
	@endforeach
</div>