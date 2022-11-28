@extends('themes.template1.blank')
@section('blank-content')

	@include('themes.template1.inc.header')

	<div id="body">
		@yield('content')
	</div>

@endsection

@include('modal.side')
@include('modal.popup')