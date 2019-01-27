@extends('layouts.app')


@section('bread')
<section class="content-header">
	<h1 style="color:#828894">
		Users List
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">Users</li>
	</ol>
</section>
@endsection

@section('body')



<div class="box">
	<div class="box-header">
		<!-- <h3 class="box-title">Add Account</h3> -->
		<a class="btn btn-add-new" style="color: white font-size:500px" href="user/create"> <i class="fa fa-plus"></i>Create New User</a>
		<!-- <a class="btn btn-add-new" style="color: white" href="user/add" >Add New User</a> -->
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="table-responsive">

			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif

			<table id="example1" class="table  table-striped">
				<thead>
					<tr class="" style="">
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->roles->name}}</td>
							<td>{{$user->status}}</td>
							<td class="">
							
							<a href='{{ url("systemsettings/user/$user->id") }}'>
								<span class="fa-stack fa-1x">
									<i class="fa fa-circle fa-stack-2x icon-background icon-view"></i>
									<i class="fa fa-eye fa-stack-1x" style="color:#fff"></i>
								</span>
							</a>

							<a href='{{ url("systemsettings/user/$user->id/edit") }}'>
								<span class="fa-stack fa-1x">
									<i class="fa fa-circle fa-stack-2x icon-background icon-edit"></i>
									<i class="fa fa-edit fa-stack-1x" style="color:#fff"></i>
								</span>
							</a>

							<a href='{{ url("systemsettings/user/$user->id") }}'>
								<span class="fa-stack fa-1x">
									<i class="fa fa-circle fa-stack-2x icon-background icon-del"></i>
									<i class="fa fa-trash fa-stack-1x" style="color:#fff"></i>
								</span>
							</a>
						</span>
					</td>
						</tr>
					@endforeach
		</tbody>
		</table>
	</div>
</div>
<!-- /.box-body -->
</div>


<div class="spacer">
</div>



@endsection