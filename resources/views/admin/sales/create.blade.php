@extends('admin.layouts.app')


@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">انشاء  المبيعات</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
		<li class="breadcrumb-item active">انشاء المبيعات</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
                <!-- Create Sale -->
                <form method="POST" action="{{route('sales.store')}}">
					@csrf
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>المنتج <span class="text-danger">*</span></label>
								<select class="select2 form-select form-control" name="product"> 
									@foreach ($products as $product)
										@if (!empty($product->purchase))
											@if (!($product->purchase->quantity <= 0))
                                                <option disabled selected > اختار منتج</option>
												<option value="{{$product->id}}">{{$product->purchase->product}}</option>
											@endif
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>الكمية</label>
								<input type="number" value="1" class="form-control" name="quantity">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block">حفظ التغي</button>
				</form>
                <!--/ Create Sale -->
			</div>
		</div><!-- Visit codeastro.com for more projects -->
	</div>			
</div>
@endsection	


@push('page-js')
    
@endpush