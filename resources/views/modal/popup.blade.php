<link rel="stylesheet" href="{{ asset('css/modal-popup.css') }}">

<div id="modal-popup">
	<div class="background"></div>
	<div class="modal">
		<div class="modal-header">
			<a href="#" class="btn-close">
				{!! __('icon.x') !!} &nbsp; ปิดหน้าต่าง
			</a>
		</div>
		<div class="modal-body">
			<div class="text-center" style="font-weight:bold; text-align:center; font-size:1.5rem;">สินค้า</div>
			<div class="flex-row-space-between-center" style="margin-bottom:1rem;">
				<span style="font-weight:bold;">
					{{ number_format(9999)}} บาท
				</span>
				<span class="flex-row-space-between-center" style="gap:0.5rem;">
					<span>จำนวน</span>
					<a href="#10" class="btn btn-secondery flex-row-space-between-center" style="gap:0.5rem; padding:0.2rem 0.5rem; font-size:0.6rem;">
						{!! __('icon.minus') !!} 10
					</a>
					<a href="#1" class="btn btn-secondery flex-row-space-between-center" style="padding:0.2rem;">
						{!! __('icon.minus') !!}
					</a>
					<span style="padding:0 1rem; font-weight:bold;">99</span>
					<a href="#1" class="btn btn-secondery flex-row-space-between-center" style="padding:0.2rem;">
						{!! __('icon.plus') !!}
					</a>
					<a href="#10" class="btn btn-secondery flex-row-space-between-center" style="gap:0.5rem; padding:0.2rem 0.5rem; font-size:0.6rem;">
						{!! __('icon.plus') !!} 10
					</a>
				</span>
			</div>
			<div>
				<div style="font-weight:bold;">Note: </div>
				{{ Form::textarea(false, false, ['class' => 'form-control', 'placeholder' => 'Note']) }}
			</div>
		</div>
		<div class="modal-footer flex-row-space-between-center" style="gap:1rem;">
			<a class="btn cursor-pointer btn-cancel btn-secondery" style="width:50%;">ยกเลิก</a>
			<a href="" class="btn btn-primary" style="width:50%;">เพิ่ม</a>
		</div>
	</div>
</div>


@push('js')
	<script src="{{ asset('js/modal-popup.js') }}"></script>
@endpush 
