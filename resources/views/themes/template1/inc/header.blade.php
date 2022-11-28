<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<style>
#header .title
{
	height:53px;
	color:var(--mainColor4);
	text-decoration: none;
	font-weight:bold;

	display:flex;
	flex: row;
	justify-content: center;
	align-items: center;
}
#header .btn
{
	cursor:pointer;
	height:53px;
	width:53px;
	
	display:flex;
	flex: row;
	justify-content: center;
	align-items: center;
}

#header .btn:hover
{
	background:#0005;
}
</style>

<div id="header">
	<a style=" " class="btn btn-menu">{!! __('icon.list') !!}</a>
	<a href="{{ url('/') }}" class="title">TABLEWARE</a>
	<a style="" class="btn btn-order">{!! __('icon.receipt') !!}</a>
</div>


@push('js')
	<script src="{{ asset('js/header.js') }}"></script>
@endpush