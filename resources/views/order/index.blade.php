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
}

@media (max-width:992px)
{
	#order .product { width:100%; }
	#order .order { display:none; }
}
/* CATEGORIES */
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
	justify-content: center;
	/* justify-content: space-around; */
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

	cursor:pointer;

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
/* ORDERS */
.sub-text
{
	font-weight:bold;
	font-size:0.8rem;
	color:#0005;
}
/* ORDERS - HEADER */
#order .order .header,
#order .order .body
{
	margin-bottom:0.5rem;
}
#order .order .header .btn-delete
{
	cursor:pointer;
	font-weight:bold;
	margin-left:1rem;
	color:#0008;
	padding:0.2rem;

}

#order .order .header .code
{
	font-weight:bold;
	color:var(--mainColor2);
}
/* ORDER - BODY */
#order .order .body .item
{
	margin-bottom:2rem;
}

#order .order .body .item .price
{
	font-weight:bold;
}

#order .order .body .main-item
{
	margin-bottom:0.2rem;
}
#order .order .body .sub-item
{
	font-weight:bold;
	font-size:0.8rem;
}
/* ORDER - FOOTER */
#order .order .footer
{
	
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
				<div class="item shadow">
					<div class="photo"></div>
					<div class="label">สินค้า {{ $range }}</div>
				</div>
			@endforeach

		</div>
	</div>
	<div class="order">
		<div class="header block shadow flex-row-space-between-center">
			<span class="code">22B28012</span>
			<a href="" class="btn-delete flex-row-space-between-center">
				{!! __('icon.trash') !!} &nbsp;
				ลบรายการ
			</a>
		</div>	

		<div class="body block shadow">
			@foreach (range(1, 10) as $range)
				<div class="item">
					<div class="main-item flex-row-space-between-center">
						<span>
							Menu {{ $range }}
							<span class="sub-text"> x {{ rand(1,20) }}</span>
						</span>
						<span class="price">{{ number_format(9999) }}</span>
					</div>
					<div class="sub-item">
						• เพิ่มเติม: <span class="sub-text">รายละเอียดเพิ่มเติม</span>
					</div>
				</div>
			@endforeach

			<div>

			</div>
		</div>
		<div class="footer">
			<div class="flex-row-space-between-center" style="gap:1rem; margin-bottom:0.5rem;">
				<a href="" style=" width:50%;" class="btn btn-secondery">พักรายการ</a>
				<a href="" style=" width:50%;" class="btn btn-secondery">ยกเลิกออเดอร์</a>
			</div>
			<div class="flex-row-space-between-center" style="gap:1rem;">
				<a href="" class="btn btn-primary">ชำระเงิน</a>
			</div>
		</div>

	</div>
</div>


@endsection


@push('append-js')
<script>


const product_items = document.querySelectorAll("#order .product .products div.item").forEach(item => {
	item.addEventListener('click', () => {
		ModalPopup.call();
	})
});
</script>
@endpush