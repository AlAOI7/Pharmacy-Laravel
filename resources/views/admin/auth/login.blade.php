@extends('admin.layouts.plain')

@section('content')
<h1>نظام صيدلية</h1>
<p class="account-subtitle">لوحة تسجيل الدخول</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="البريد الالكتروني">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="كلمة السر">
	</div>
	<div class="form-group">
		<button class="btn btn-success btn-block" type="submit">تسجيل دخول</button>
	</div>
</form>
<!-- /Form -->

<!-- Visit codeastro.com for more projects -->

<div class="text-center forgotpass"><a href="{{route('password.request')}}">نسية كلمة السر?</a></div>
<div class="text-center dont-have">انا لا امتلك حساب? <a href="{{route('register')}}">اشتراك</a></div>
@endsection