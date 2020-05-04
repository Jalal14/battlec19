@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" href="{{ asset('public/dist/css/admin-style.css') }}">
@endsection

@section('content')
<div class="col-sm-12 color-000">
	<div class="card box-shadow">
		<div class="card-header py-3">
			<h5>Dashboard</h5>
		</div>
		<div class="card-body px-2">
			<div class="row">
				<div class="col-sm-3">
					<div class="row px-3 py-2 mx-1 background-eaeaea border">
						<div class="mr-auto">
							<div class="f-20">84.7k</div>
							<div class="f12">Total Sales </div>
						</div>
						<div class="ml-auto">
							<i class="feather icon-trending-up color-04A9F5 f40"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row px-3 py-2 mx-1 background-eaeaea border">
						<div class="mr-auto">
							<div class="f-20">487</div>
							<div class="f12">Total Orders</div>
						</div>
						<div class="ml-auto">
							<i class="feather icon-shopping-cart color-1DE7B8 f40"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row px-3 py-2 mx-1 background-eaeaea border">
						<div class="mr-auto">
							<div class="f-20">295</div>
							<div class="f12">Total Customer</div>
						</div>
						<div class="ml-auto">
							<i class="feather icon-user color-8A9ED4 f40"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row px-3 py-2 mx-1 background-eaeaea border">
						<div class="mr-auto">
							<div class="f-20">145</div>
							<div class="f12">Total Products</div>
						</div>
						<div class="ml-auto">
							<i class="feather icon-box color-8A9ED4 f40"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

@endsection