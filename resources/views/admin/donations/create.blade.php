@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="card user-list">
        <div class="card-header">
            <h5><a href="{{ url('admin/donation/list') }}">Members</a> >> Add New Donation</h5>
        </div>
	    <div class="card-body">
	        <div class="m-t-10 p-0">
	            <form id="form" method="POST" action="{{url('admin/donation/store')}}">
	                {{ csrf_field() }}
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="mobile" class="col-md-3 col-form-label">Mobile</label>
	                            <div class="col-md-9">
	                                <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="amount" class="col-md-3 col-form-label">Amount</label>
	                            <div class="col-md-9">
	                                <input type="text" name="amount" class="form-control" value="{{old('amount')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="method" class="col-md-3 col-form-label">Method</label>
	                            <div class="col-md-9">
	                                <input type="text" name="method" class="form-control" value="{{old('method')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="donation_date" class="col-md-3 col-form-label">Date</label>
	                            <div class="col-md-9">
	                                <input type="date" name="donation_date" class="form-control" value="{{old('donation_date')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="date" class="col-md-3 col-form-label">TRX</label>
	                            <div class="col-md-9">
	                                <input type="text" name="trx" class="form-control" value="{{old('trx')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
                        <div class="col-md-6 pr-md-0">
                            <button class="btn btn-flat btn-primary float-right mr-0">Submit</button>
                        </div>
                    </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>
@endsection

@section('js')
<script src="{{ asset('public/dist/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
	$("#form").validate({
        rules: {
            mobile: "required",
            amount: "required",
            date: "required",
            method: "required",
            trx: "required",
        }
    });
</script>
@endsection