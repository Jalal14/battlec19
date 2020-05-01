@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/jquery.dataTables.css')}}">
<style type="text/css">
	h1{
		font-size: 40px;
		font-weight: bolder;
	}
	h2 {
		font-size: 20px;
		line-height: 2em;
	}
	thead tr th, label, .paginate_button {
		color: white;
	}
	#donation_list tbody tr td {
		color: black;
	}
</style>
@endsection

@section('content')

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-8">
			<h1 style="text-align: center;">List of donation given</h1>
			<hr>
			<table id="donation_list" class="display">
		    	<thead>
		        	<tr>
		        		<th>Serial</th>
		        		<th>Date</th>
			            <th>In charge</th>
			            <th>Name (Member)</th>
			            <th>Contact</th>
			            <th>Location</th>
			            <th>Amount</th>
		        	</tr>
		    	</thead>
		    	<tbody>
		    		@forelse($donatedList as $index => $donated)
		    			<tr>
		    				<td>{{$index+1}}</td>
		    			@foreach($donated as $key => $value)
		    				<td>{{ $value }}</td>
		    			@endforeach
		    			</tr>
		    		@empty
		    		@endforelse
			    </tbody>
			</table>
		</div>
		<div class="col-md-4">
			<h2 style="text-align: right;">Target 400 family to help</h2>
			<h2 style="text-align: right;">Per family approx 1500 BDT</h2>
			<h2 style="text-align: right;">Total amount we need 600000BDT</h2>
			<h2 style="text-align: right;">Amount we collected 45185 BDT</h2>
			<h2 style="text-align: right;">Amount we lacking 540815 BDT</h2>
			<h2 style="text-align: right;">Donated 28606 BDT</h2>
			<h2 style="text-align: right;">Cash out charge 449 BDT</h2>
			<h2 style="text-align: right;">Amount in hand 30130 BDT</h2>
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