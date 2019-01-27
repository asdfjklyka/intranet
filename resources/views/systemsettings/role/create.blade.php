@extends('layouts.app')

@section('bread')
<section class="content-header">
	
	<h1 style="color:#828894">
		Roles
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/systemsettings/role"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">Roles</li>
	</ol>
</section>
@endsection

@section('body')
<div class="card" style="width: 100%;  box-shadow: 0 0 5px 1px #ccc; margin: auto;">
	<div class="card-header">
		<h4>Create Role</h4>
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
		<form action="{{ url('systemsettings/role') }}" method="post">
			@csrf
			<div class="row">
				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="fnHelp">
				</div>

				<div class="form-group col-md-12">
				</div>

				<div class="form-group col-md-12">
					<label for="name">Description</label>
					<input type="text" class="form-control" id="description" name="description" placeholder="Description" aria-describedby="fnHelp">
				</div>

				<div class="form-group col-md-12"></div>

				<div class="form-group col-md-12">
					<a href="{{ url('/systemsettings/role') }}" class="btn btn-sm btn-success">Back</a>
					<button type="submit" id="addrole" class="btn btn-add-new float-right">Create</button>	
				</div>

			</div>
		</form>
	</div>

	@endsection


	<script type="text/javascript">
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$(document).ready(function(){


	// Add record
	$('#addrole').click(function(){

		$.ajax({
			url: 'addRole',
			type: 'post',
			data: { _token: CSRF_TOKEN,
				name: $('#name').val(),
				description: $('#description').val()
				
			},
			success: function(response){

        // Empty the input fields
        $('#name').val('');
        $('#description').val('');
        
    }
});

	});

});
</script>