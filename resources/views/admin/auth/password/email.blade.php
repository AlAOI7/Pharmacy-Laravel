@extends('admin.layouts.plain')

@section('content')
<h1>نسية كلمة السر ?</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>
<!-- Form -->
<form action="{{route('password.request')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">حفظ</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">تذكرني ? <a href="{{route('login')}}">تسجيل دخول</a></div>
@endsection