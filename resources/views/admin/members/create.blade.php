@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="card user-list">
        <div class="card-header">
            <h5><a href="{{ url('admin/member/add') }}">Members</a> >> Add New Member</h5>
        </div>
	    <div class="card-body">
	        <div class="m-t-10 p-0">
	            <form id="form" method="POST" action="{{url('admin/member/store')}}">
	                {{ csrf_field() }}
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="name" class="col-md-3 col-form-label">Name</label>
	                            <div class="col-md-9">
	                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="phone" class="col-md-3 col-form-label">Phone</label>
	                            <div class="col-md-9">
	                                <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="email" class="col-md-3 col-form-label">Email</label>
	                            <div class="col-md-9">
	                                <input type="text" name="email" class="form-control" value="{{old('email')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="email" class="col-md-3 col-form-label">Password</label>
	                            <div class="col-md-9">
	                                <input type="password" name="password" class="form-control">
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
            name: "required",
            phone: "required",
            email: "required",
            password: "required"
        }
    });
</script>
@endsection