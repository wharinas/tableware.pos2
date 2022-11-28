<link rel="stylesheet" href="{{ asset('css/modal-main.css') }}">

<div id="modal">
	<div class="background" style="width:100%; height:100vh; position:absolute; z-index:-1;">

	</div>
	<div class="content left">
		@include('themes.template1.inc.menu')
	</div>
	<div class="content right">
	</div>
</div>

@push('js')
	<script src="{{ asset('js/modal.js') }}"></script>
@endpush