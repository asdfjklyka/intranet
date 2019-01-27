@extends('layouts.app')

@section('bread')
<section class="content-header">
	<h1 style="color:#828894">
		User
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/systemaccount"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">User</li>
	</ol>
</section>
@endsection

@section('body')
<div class="card" style="width: 100%;  box-shadow: 0 0 5px 1px #ccc; margin: auto;">
	<div class="card-header">
		<h4>Update User</h4>
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

		<form action='{{ url("/systemsettings/user/$users->id") }}' method="post">
			@csrf
			{{ method_field('PATCH') }}			
			<div class="row">
				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" value="{{ $users->name }}" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="fnHelp">
				</div>

				<div class="form-group col-md-12">
					<label for="email">Email address</label>
					<input type="email" value="{{ $users->email }}" class="form-control" id="email" name="email" placeholder="email">
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
							@if($role->id == $users->role)
								<option value="{{ $role->id }}" selected>{{ $role->name }}</option>
							@else
								<option value="{{ $role->id }}">{{ $role->name }}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-6">
					<label>Status</label>
					<select class="form-control" id="status" name="status">
						@if( $users->status == "active" )
							<option value="active" selected>Active</option>
						@else
							<option value="active">Active</option>
						@endif
						@if( $users->status == "inactive" )
							<option value="inactive" selected>Inactive</option>
						@else
							<option value="inactive">Inactive</option>
						@endif
					</select>
				</div>
			</div>

			<a href="{{ url('/systemsettings/user') }}" class="btn btn-sm btn-primary">Back</a>
			<button type="submit" id="update" class="btn btn-add-new float-right">Create</button>
		</form>

	</div>
</div>

@endsection


<script type="text/javascript">

	$(document).ready(function(){

	// Update record
	$(document).on("click", ".update" , function() {
		var id = $(this).data('id');
		$.ajax({
			url: 'updateUser/'+id,
			type: 'put',
			data: {
				_token: CSRF_TOKEN,
				id: id,
				name: $("#name_"+id).val(),
				email: $("#email_"+id).val(),
				password: $("#password_"+id).val()
				role: $("#role_"+id).val(),
				status: $("#status_"+id).val(),
			},
			success: function(response){
				alert(response);
			}
		});
	});
});

</script>