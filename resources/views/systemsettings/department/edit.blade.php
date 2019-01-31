@extends('layouts.app')

@section('bread')
<section class="content-header">
	<h1 style="color:#828894">
		Department
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/systemsettings/department"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">Department</li>
	</ol>
</section>
@endsection

@section('body')
<div class="card" style="width: 100%;  box-shadow: 0 0 5px 1px #ccc; margin: auto;">
	<div class="card-header">
		<h4>Update Department</h4>
	</div>
	<div class="card-body" >

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action='{{ url("/systemsettings/department/$departments->id") }}' method="post">
			@csrf
			{{ method_field('PATCH') }}		
			<div class="row">
				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" value="{{ $departments->name }}" name="name" placeholder="Name" aria-describedby="fnHelp">
				</div>

				<div class="form-group col-md-12">
					
				</div>

				<div class="form-group col-md-12">
					<label for="name">Detail</label>
					<input type="text" class="form-control" id="detail" value="{{ $departments->detail }}" name="detail" placeholder="Detail" aria-describedby="fnHelp">
				</div>

				<div class="form-group col-md-12"></div>

				<div class="form-group col-md-12">
					<a href="{{ url('/systemsettings/department') }}" class="btn btn-sm btn-success">Back</a>
					<button type="submit" id="updatedept" class="btn btn-add-new float-right">Update</button>	
				</div>

			</div>
		</form>
	</div>

	@endsection


	<script type="text/javascript">
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$(document).ready(function(){


	// Add record
	$(document).on("click", ".updatedept" , function() {
		var id = $(this).data('id');
		$.ajax({
			url: 'updateDepartment/'+id,
			type: 'put',
			data: {
				_token: CSRF_TOKEN,
				id: id,
				name: $("#name_"+id).val(),
				detail: $("#detail_"+id).val()
			},
			success: function(response){
				alert(response);
			}
		});
	});
});
</script>