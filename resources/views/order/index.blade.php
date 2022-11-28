@extends('themes.template1.content')
@push('css')
<style>

#order
{
	display:flex;
	flex-direction: row;
	gap:1rem;
}

#order .product
{
	width:70%;
}

#order .order
{
	width:30%;
	border:solid 1px #f00;
}

@media (max-width:992px)
{
	#order .product
	{
		width:100%;
	}

	#order .order
	{
		display:none;
	}
}

#order .categories
{
	display:flex;
	flex-direction: row;
	flex-wrap: wrap;
	gap:1rem;
	margin-bottom:2rem;
}
#order .categories a
{
	border:1px solid var(--mainColor1);
	border-radius:4px;
	color:var(--mainColor1);
	background:#fff;
	padding:0.5rem 0.8rem;
	text-decoration: none;
}

#order .categories a:hover
{
	background:var(--mainColor2);
	color:var(--mainColor4);
}

#order .categories a.active
{
	background:var(--mainColor1);
	color:var(--mainColor4);
}

/* PRODUCTS */
#order .products
{
	display:flex;
	flex-direction: row;
	flex-wrap: wrap;
	gap:1rem;
	justify-content: space-around;
	margin-top:1rem;
}
#order .products .item
{
	min-width:160px;
	min-height:160px;
	display:flex;
	flex-direction: column;

	border:solid 1px #0003;
	border-radius:0.5rem;
	overflow:hidden;
}

#order .products .item .photo
{
	background:#ddd;
	height:160px;
	width:100%;
	display:inline-block;
}

#order .products .item .label
{
	background:#fff;
	color:#0008;
	padding:0.5rem;	
}
</style>
@endpush
@section('content')

<div id="order">
	<div class="product">
		<div class="categories">
			@foreach (range(1,10) as $range)
				<a href="#" class="{{ $range == 1 ? 'active' : '' }}">{{ 'CAT'.$range }}</a>
			@endforeach
		</div>
		<div class="products">

			@foreach (range(1,20) as $range)
				<div class="item">
					<div class="photo"></div>
					<div class="label">สินค้า {{ $range }}</div>
				</div>
			@endforeach

		</div>
	</div>
	<div class="order">
		ORDER
	</div>
</div>


@endsection