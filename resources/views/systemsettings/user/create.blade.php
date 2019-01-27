@extends('layouts.app')

@section('bread')
<section class="content-header">
	<h1 style="color:#828894">
		Create User
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/systemsettings/user"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">User</li>
	</ol>
</section>
@endsection

@section('body')
<div class="card" style="width: 100%;  box-shadow: 0 0 5px 1px #ccc; margin: auto;">
	<div class="card-header">
		<h4>Create New User</h4>
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

		<form action="{{ url('/addUser') }}" method="post">
			
			@csrf
			
<div class="row">
			<div class="form-group col-md-12">
				<label for="name">Name</label>
				<input type="text" value="" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="fnHelp">
			</div>
			
			<div class="form-group col-md-12">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="email">
			</div>

			<div class="form-group col-md-12">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="userHelp">
				<h6>
					<p id="passwordHelpBlock" class="form-text text-muted">
						Password must be more than 5 characters long
						Should contain atleast 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
					</p>
				</h6>
			</div>
</div>
			<div class="row">

				<div class="form-group col-md-6">
					<label>Role</label>
					<select class="form-control" name="role">
						@foreach($roles as $role)
						<option value="{{ $role->id}}">{{ $role->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-6">
					<label>Status</label>
					<select class="form-control" id="status" name="status">
						<option value="active">Active</option>
						<option value="inactive">Inactive</option>
					</select>
				</div>
			</div>

			<a href="{{ url('/systemsettings/user') }}" class="btn btn-sm btn-primary">Back</a>
			<button type="submit" id="adduser" class="btn btn-add-new float-right">Create</button>
		</form>

	</div>
</div>

@endsection


<script type="text/javascript">

	$(document).ready(function(){

	// Add record
	$('#adduser').click(function(){

		$.ajax({
			url: 'addUser',
			type: 'post',
			data: { _token: CSRF_TOKEN,
				name: $('#name').val(),
				email: $('#email').val(),
				password: $('#password').val(),
				role: $('#role').val(),
				status: $('#status').val()
			},
			success: function(response){

        // Empty the input fields
        $('#name').val('');
        $('#email').val('');
        $('#password').val('');
        $('#status').val('');
        $('#role').val('');
    }
});
	});
});
</script>