@extends('layouts.admin')

@section('css')
<style type="text/css">
.dropzone-attachments{
    /*background-image: url("../img/dropzone_attachment.jpg");*/
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 100px;
    background-color: rgb(237, 237, 237);
    padding: 10px 0px;
}
.event-attachments{min-height: 175px; padding: 0px 7px;}
.add-attachments{float: left; height: 80px; width: 70px; border: 1px dashed #aaa; margin: 10px 0px 0px 10px; text-align: center; vertical-align: middle; cursor: pointer;}
.add-attachments .fa-plus{font-size: 40px; margin-top: 20px}
.list-attachments {float: left; height: 80px; width: 80px; border: 1px dashed #aaa; margin: 10px 0px 0px 10px; text-align: center; background-color: #ddd}
.list-attachments .fa{ font-size: 50px; line-height: 1.3}
.list-attachments .attachment-item-delete{font-size: 14px; margin: 2px 2px 0px 63px; clear: both; cursor: pointer; color: #A00}
.dz-preview, .dz-file-preview { display: none; }
.list-attachments .far { font-size: 60px; margin-top: -10px; }
</style>
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card user-list">
        <div class="card-header">
            <h5><a href="{{ url('admin/member/list') }}">Members</a> >> Add New Member</h5>
        </div>
	    <div class="card-body">
	        <div class="m-t-10 p-0">
	            <form id="form" method="POST" action="{{url('admin/post/store')}}" enctype="multipart/form-data">
	                {{ csrf_field() }}
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="description" class="col-md-3 col-form-label">Description</label>
	                            <div class="col-md-9">
	                            	<textarea name="description" class="form-control">{{old('description')}}</textarea>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="area" class="col-md-3 col-form-label">Area</label>
	                            <div class="col-md-9">
	                                <input type="text" name="area" class="form-control" value="{{old('area')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="in_charge" class="col-md-3 col-form-label">In Charge</label>
	                            <div class="col-md-9">
	                                <input type="text" name="in_charge" class="form-control" value="{{old('in_charge')}}">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="donation_date" class="col-md-3 col-form-label">Date</label>
	                            <div class="col-md-9">
	                                <input type="text" name="donation_date" class="form-control">
	                            </div>
	                        </div>
	                    </div>
	                </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                              <label for="cover" class="col-md-3 col-form-label">Cover photo</label>
                              <div class="col-md-9">
                                  <div class="custom-file">
                                      <input type="file" name="cover" class="custom-file-input" id="validatedCustomFile" required="">
                                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group row">
	                            <label for="photo" class="col-md-3 col-form-label">Photos</label>
	                            <div class="col-md-9">
	                                <div class="dropzone-attachments">

			                            <div class="event-attachments">
                      						<div class="add-attachments"><i class="fa fa-plus"></i></div>
                    					</div>
			                        </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group row">
                		<div class="col-md-1"></div>
                		<div class="col-md-11" id="uploader-text"></div>
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
<script src="{{ asset('public/dist/js/ajaxupload.js') }}"></script>
<script src="{{ asset('public/dist/js/dragdrop.js') }}"></script>
<script src="{{ asset('public/dist/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/datta-able/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
	var token='{{csrf_token()}}';
	$("#form").validate({
        rules: {
            description: "required",
            area: "required",
            in_charge: "required",
            donation_date: "required"
        }
    });
    var statusPicture = $("#uploader-text");
  	var msg = "";
    $(".dropzone-attachments").dropzone({
    	url: "{{url('admin/file/upload')}}",
    	paramName: "attachment",
    	headers: {
      		'X-CSRF-TOKEN':  '{{ csrf_token() }}'
    	},
    	createImageThumbnails: false,
    	sending: function(file, xhr, formData) {
      		formData.append("customer_id", $('#customers').val());
      		statusPicture.text("Uploading...");
    	},
    	maxFilesize: 12,
    	maxFiles: 15,
    	// acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    	clickable: [$('.add-attachments').get(0)],
    	// parallelUploads: 2,
    	error: function() {
      		statusPicture.text("{{ __('Upload failed, unknown error!') }}");
    	},
    	complete: function(file) {
      	if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        	statusPicture.html(msg);
      	}
    	},
    	success: function(file, response){
      		res = jQuery.parseJSON(response);
      		if (res.result == true) {
        		$('.add-attachments').before('<div class="list-attachments"><i class="fa fa-times attachment-item-delete" data-id="0" data-attachment="' + res.data.attachment_path + '" title="Delete Attachment" aria-hidden="true"></i><br><i class="'+res.data.attachment_type+'" title="'+res.data.attachment_name+'"><input type="hidden" name="attachments[]" value="' + res.data.attachment + '"></div>');
        		msg = "";
      		} else {
        		msg = '<span class="text-danger">'+res.errorMessage+'</span>';
      		}
    	}
  	});
  	$(document).on('click', '.attachment-item-delete', function() {
    	swal({
	        title: "Are you sure",
	        text: "Are you sure you want to delete this item",
	        icon: "warning",
	        buttons: true,
	        dangerMode: true,
	    })
    	.then((willDelete) => {
        	if (willDelete) {
          		var element = $(this);
          		var parent = element.parent();
          		$.ajax({
            		type: "POST",
            		url: "{{url('admin/file/remove')}}",
            		data: {id: element.attr('data-id'), filePath: element.attr('data-attachment'), _token:token},
            		dataType: 'json',
            		success: function(response){
              			if (response.status == 1) {
                			parent.remove();
          				} else {
            				swal(response.message, {
              					icon: "error",
            				});
          				}
        			}
          		});
        	}
    	});
  	});
 });
</script>
@endsection