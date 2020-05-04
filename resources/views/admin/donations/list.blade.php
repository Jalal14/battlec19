@extends('layouts.list-layout')

@section('list-title')
	<h5>Member List</h5>
@endsection
@section('list-add-button')
	<div class="col-md-2 offset-md-2 col-sm-4 col-xs-12">
		<a href="{{ url('admin/donation/add') }}" class="btn btn-outline-primary custom-btn-small btn-block btn-default btn-flat"><span class="fa fa-plus"> &nbsp;</span>Add Donation</a>
	</div>
@endsection
