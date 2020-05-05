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
			<h1 style="text-align: center;">List of donation collected</h1>
			<hr>
			<table id="donation_list" class="display">
		    	<thead>
		        	<tr>
		        		<th>Serial</th>
			            <th>Donor</th>
			            <th>Donated amount(BDT)</th>
			            <th>Method</th>
		        	</tr>
		    	</thead>
		    	<tbody>
		    		@forelse($donations as $key => $donation)
		        	<tr>
			            <td>{{ $key+1 }}</td>
			            <td>{{ $donation->mobile }}</td>
			            <td>{{ $donation->amount }}</td>
			            <td>{{ !empty($donation->method) ? $donation->method : '-' }}</td>
		        	</tr>
			        @empty
			        @endforelse
			    </tbody>
			</table>
		</div>
		<div class="col-md-4">
			<h3 style="text-align: right;">Target 400 family to help</h3>
			<h3 style="text-align: right;">Per family approx 1500 BDT</h3>
			<h3 style="text-align: right;">Total amount we need 600000BDT</h3>
			<h3 style="text-align: right;">Amount we collected {{ $donation->sum('amount') }} BDT</h3>
			<h3 style="text-align: right;">Amount we lacking {{ 600000 - ($donation->sum('amount')) - $cash_out }} BDT</h3>
			<h3 style="text-align: right;">Donated {{ $donated }} BDT</h3>
			<h3 style="text-align: right;">Cash out charge {{ $cash_out }} BDT</h3>
			<h3 style="text-align: right;">Amount in hand {{ $donation->sum('amount') - $donated - $cash_out }} BDT</h3>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#donation_list').DataTable({
    	"pageLength": 25
    });
} );
</script>
@endsection