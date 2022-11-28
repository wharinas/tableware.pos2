<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<div id="header">
	<a class="btn-menu">{!! __('icon.list') !!}</a>
	<span style="font-weight:bold;">TABLEWARE</span>
	<a class="btn-order">{!! __('icon.receipt') !!}</a>
</div>


@push('js')
	<script src="{{ asset('js/header.js') }}"></script>
@endpush