@push('css')
<link rel="stylesheet" href="{{ asset('css/modal-side.css') }}">
@endpush

<div id="modal-side">
	<div class="background"></div>
	<div class="content left">
		@include('themes.template1.inc.menu')
	</div>
	<div class="content right"></div>
</div>

@push('js')
	<script src="{{ asset('js/modal-side.js') }}"></script>	
@endpush