@extends('themes.template1.blank')
@section('blank-content')

	@include('modal.main')
	@include('themes.template1.inc.header')

	<div id="body">
		@yield('content')
	</div>

@endsection