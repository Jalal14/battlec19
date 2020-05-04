@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" href="{{ asset('public/dist/css/admin-style.css') }}">
@endsection

@section('content')
<div class="col-sm-6 color-000">
	<div class="card box-shadow">
		<div class="card-header py-3">
			<h5>Donation</h5>
		</div>
		<div class="card-body px-2">
			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group row">
					<label class="col-md-3 col-form-label">Upload file</label>
                    <div class="col-md-9">
                        <div class="custom-file">
                            <input type="file" name="csv" class="custom-file-input" id="validatedCustomFile" required="">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
				</div>
				<div class="form-group row">
					<div class="col-sm-12">
						<input type="submit" class="btn btn-primary float-right" value="Upload">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('js')

@endsection