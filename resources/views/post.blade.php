@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/jquery.dataTables.css')}}">
<style type="text/css">
	h1{
		font-size: 40px;
		font-weight: bolder;
		color: white;
	}
	h3 {
		font-size: 20px;
		line-height: 2em;
		color: white;
	}
</style>
@endsection

@section('content')

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align: center;">Donation in {{$post->area}}</h1>
			<div class="row">
				<img class="img-thumbnail m-1" src="{{asset('public/uploads/posts')}}/{{$post->donationImages->where('is_cover', 1)->first()->photo}}" style="width: 100%">
			</div>
			<div class="row">
				<p>{{$post->description}}</p>
			</div>
			<h1 style="text-align: center;">Donation photos</h1>
			<div class="row">
				@forelse($post->donationImages->where('is_cover', 0) as $image)
                    <div class="col-3">
                        <img class="img-thumbnail m-1" src="{{asset('public/uploads/posts')}}/{{$image->photo}}" style="height: 200px;">
                    </div>
                @empty
                @endforelse
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#donation_list').DataTable();
} );
</script>
@endsection