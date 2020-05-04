@extends('layouts.admin')
@section('css')
  <link rel="stylesheet" href="{{ asset('public/plugins/Responsive-2.2.2/css/responsive.dataTables.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/datta-able/plugins/select2/css/select2.min.css') }}">
  <!-- Bootstrap multi select -->
  <link rel="stylesheet" href="{{ asset('public/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
  @yield('listCSS')

@endsection

@section('content')
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-8 col-sm-4 col-xs-12 mb-1">
            @yield('list-title')
        </div> 
        @yield('list-add-button')
      </div>
    </div>
    <div class="card-body p-0">
      <div class="col-sm-12 yearMarginCSS px-0">
        @yield('list-form-content')
      </div>
      <div class="card-block pt-2 px-2">
        <div class="col-sm-12">
          <div class="table-responsive">
            {!! $dataTable->table(['class' => 'table table-striped table-hover dt-responsive', 'width' => '100%', 'cellspacing' => '0']) !!}
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset('public/plugins/DataTables-1.10.18/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/plugins/Responsive-2.2.2/js/dataTables.responsive.min.js') }}"></script>
{{-- Moment js --}}
<script src="{{ asset('public/plugins/moment.min.js') }}"></script>
{{-- Select2 --}}
<script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- Bootstrap multi select -->
<script src="{{ asset('public/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

@yield('list-js')

{!! $dataTable->scripts() !!}

<script type="text/javascript">
  'use strict';
  $(document).ready(function() {
    // [ Single Select ] start
    $(".select2").select2();
  });

  
  $(document).on("click", "#tablereload", function(event){
    event.preventDefault();
    $("#dataTableBuilder").DataTable().ajax.reload();
  });
</script>
@endsection