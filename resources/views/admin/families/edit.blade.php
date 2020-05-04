@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('public/datta-able/plugins/select2/css/select2.min.css') }}">
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card user-list">
        <div class="card-header">
            <h5><a href="{{ url('admin/donation/list') }}">Members</a> >> Update family</h5>
        </div>
	    <div class="card-body">
	        <div class="m-t-10 p-0">
	            <form id="form" method="POST" action="{{url('admin/family/update')}}">
	                {{ csrf_field() }}
	                <input type="hidden" name="id" value="{{$family->id}}">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="name" class="col-md-3 col-form-label">Name</label>
	                            <div class="col-md-9">
	                                <input type="text" name="name" class="form-control" value="{{$family->name}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="mobile" class="col-md-3 col-form-label">Mobile</label>
	                            <div class="col-md-9">
	                                <input type="text" name="mobile" class="form-control" value="{{$family->mobile}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="member" class="col-md-3 col-form-label">Family Member</label>
	                            <div class="col-md-9">
	                                <input type="text" name="member" class="form-control" value="{{$family->member}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="area" class="col-md-3 col-form-label">Area</label>
	                            <div class="col-md-9">
	                                <input type="text" name="area" class="form-control" value="{{$family->area}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="amount" class="col-md-3 col-form-label">Amount</label>
	                            <div class="col-md-9">
	                                <input type="text" name="amount" class="form-control" value="{{$family->amount}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="donation_date" class="col-md-3 col-form-label">Date</label>
	                            <div class="col-md-9">
	                                <input type="text" name="donation_date" class="form-control" value="{{$family->donation_date}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="date" class="col-md-3 col-form-label">In charge</label>
	                            <div class="col-md-9">
	                                <input type="text" name="in_charge" class="form-control" value="{{$family->in_charge}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="date" class="col-md-3 col-form-label">Status</label>
	                            <div class="col-md-9">
	                            	<select name="status" class="select2 form-control">
	                            		<option value="Pending" {{$family->status == 'Pending' ? 'selected' : ''}}>Pending</option>
	                            		<option value="Processing" {{$family->status == 'Peocessing' ? 'selected' : ''}}>Processing</option>
	                            		<option value="Done"{{$family->status == 'Done' ? 'selected' : ''}}>Done</option>
	                            	</select>
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
<script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript">
	$('.select2').select2();
	$("#form").validate({
        rules: {
            mobile: "required",
            amount: "required",
            date: "required",
        }
    });
</script>
@endsection