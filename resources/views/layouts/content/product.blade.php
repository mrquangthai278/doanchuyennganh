<!-- hiển thị danh sách các sản phẩm -->

@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include("layouts.elements.sidebar")
			</div>
			<div class="col-sm-9 padding-right">
				Đây là trang lọc sản phẩm
			</div>
		</div>
	</div>
@endsection