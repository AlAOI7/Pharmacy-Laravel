@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">المورد</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
		<li class="breadcrumb-item active">المورد</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('suppliers.create')}}" class="btn btn-success float-right mt-2">اضافى جديدة</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Suppliers -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="supplier-table" class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>المنتج</th>
								<th>الاسم</th>
								<th>الهاتف</th>
								<th>البريد الالكتروني</th>
								<th>العنوان</th>
								<th>الشركة</th>
								<th class="action-btn">الاجراءات</th>
							</tr>
						</thead>
						<tbody>
										
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Suppliers-->
		
	</div>
</div>

@endsection	

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#supplier-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('suppliers.index')}}",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
                {data: 'company',name: 'company'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
@endpush