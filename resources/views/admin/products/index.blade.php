@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
	
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">المنتجات</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
		<li class="breadcrumb-item active">المنتجات</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('products.create')}}" class="btn btn-success float-right mt-2">اضافة منتج</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- المنتجات -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="product-table" class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>اسم المنتج</th>
								<th>الفئاه</th>
								<th>السعر</th>
								<th>الكمية</th>
								<th>الهامش</th>
								<th>تاريخ الانتهاء</th>
								<th class="action-btn">الاجراءات</th>
							</tr>
						</thead>
						<tbody>

														
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /المنتجات -->
		<!-- Visit codeastro.com for more projects -->
	</div>
</div>


@endsection

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#product-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('products.index')}}",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'category', name: 'category'},
                {data: 'price', name: 'price'},
                {data: 'quantity', name: 'quantity'},
                {data: 'discount', name: 'discount'},
				{data: 'expiry_date', name: 'expiry_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
@endpush