@extends('admin.layouts.app')

<x-assets.datatables />  

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">الادوار</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
		<li class="breadcrumb-item active">الادوار</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('roles.create')}}" class="btn btn-success float-right mt-2">اضافة دور</a>
</div>

@endpush

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="role-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
								<th>الاسم</th>
								<th>الصلاخيات</th>
								<th class="text-center action-btn">الاجراءات</th>
							</tr>
						</thead>
						<tbody>
													
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>			
</div>

@endsection


@push('page-js')
	<script>
		$(document).ready(function() {
            var table = $('#role-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('roles.index')}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'permissions', name: 'permissions'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
			
			//
		});
	</script>
	
@endpush
