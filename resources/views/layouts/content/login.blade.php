<!-- hiển thị nội dung, sản phẩm trang chủ -->

@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<form action="{{ route('frontend.postlogin') }}" id="loginform" class="form-horizontal" method="post">
						{{ csrf_field() }}
						<input id="login-username" type="text" class="form-control" name="email" placeholder="username or email" value="{{old('email')}}">          
						<input id="login-password" type="password" class="form-control" name="password" placeholder="password" value="{{old('password')}}">
						<span>
							<input type="checkbox" class="checkbox" name="remmember"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form action="#">
						<input type="text" placeholder="Name"/>
						<input type="email" placeholder="Email Address"/>
						<input type="password" placeholder="Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
@endsection