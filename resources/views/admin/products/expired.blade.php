@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
	
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">تاريخ الانتهاء</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('products.index')}}">المنتجات</a></li>
		<li class="breadcrumb-item active">ناريخ الانتهاء</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Recent Orders -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="expired-product" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr>
								<th>اسم العلامة التجارية</th>
								<th>الفئاه</th>
								<th>السعر</th>
								<th>الكمية</th>
								<th>الخصم</th>
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
		<!-- /Expired Products -->
		
	</div>
</div>
<!-- Visit codeastro.com for more projects -->
@endsection

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#expired-product').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('expired')}}",
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