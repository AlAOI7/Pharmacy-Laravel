@extends('admin.layouts.plain')

@section('content')
<h1>نظام صيدلية</h1>
<p class="account-subtitle">اشتراك مندوب مبيعات</p>
<!-- Visit codeastro.com for more projects -->
<!-- Form -->
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="الاسم كامل">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="{{old('email')}}" placeholder="البريد الالكتروني">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="كلمه السر">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="تاكيد كلمه السر">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-danger btn-block" type="submit">اشتراك (مندوب مبيعات)</button>
	</div>
</form>
<!-- /Form -->
								
<div class="text-center dont-have">التحقق من حسابي? <a href="{{route('login')}}">تسجيل</a></div>
@endsection