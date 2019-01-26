  
  @extends('layouts.app')
  @section ('bread')
  <section class="content-header">
      <h1 style="color:#828894"">
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">User profile</li>
      </ol>
    </section>
  @endsection
  @section('body')

  <div class="col-xl-4 col-lg-5">

  	<!-- Profile Image -->
  	<div class="box box-primary">
  		<div class="box-body box-profile">
  			{{--  <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="../../images/5.jpg" alt="User profile picture"> --}}

  			<h3 class="profile-username text-center">Jhone Mical</h3>

  			<p class="text-muted text-center">IT department</p>



  			<div class="row">
  				<div class="col-12">
  					<div class="profile-user-info">
  						<p>Email address </p>
  						<h6 class="margin-bottom">jhone.mical@yahoo.com</h6>
  						<p>Phone</p>
  						<h6 class="margin-bottom">+11 123 456 7890</h6> 
  						<p>Address</p>
  						<h6 class="margin-bottom">123, Lorem Ipsum, Florida, USA</h6>




  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- /.box-body -->
  	</div>
  	<!-- /.box -->
  </div>
  <!-- /.col -->

  <div class="col-xl-8 col-lg-7">
  	<div class="nav-tabs-custom">
  		<ul class="nav nav-tabs page">
  			<li><a class="active" href="#personal-info" data-toggle="tab">{{-- <span><i class="fa fa-user"></i></span>  --}}Personal information</a></li>
  			<li><a href="#activity" data-toggle="tab">Activity</a></li>
  			<li><a href="#settings" data-toggle="tab">Settings</a></li>
  		</ul>

  		<div class="tab-content">

  			<div class="active tab-pane" id="personal-info">
  				<div class="card" style="width: 100%;  box-shadow: 0 0 5px 1px #999;">

  					<div class="card-body" >
  						<div class="row">
  							<div class="col-md-4">
  								<p class="tf">Full Name </p>
  								<h6 class="margin-bottom">jhone.mical@yahoo.com lorem</h6>
  							</div>
  							<div class="col-md-4">
  								<p class="tf">Nickname </p>
  								<h6 class="margin-bottom">jhone</h6>
  							</div>
  							<div class="col-md-4">
  								<p class="tf">Gender </p>
  								<h6 class="margin-bottom">male</h6>
  							</div>
  						</div>
  						<hr style="width: 100%; color: black; height: 1px; background:1px solid rgba(0, 0, 0, 0.1)" />
  						<div class="row text-center">
  							<div class="col-md-6">
  								<p class="tf">Permanent Address </p>
  								<h6 class="margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h6>
  							</div>
  							
  							<div class="col-md-6">
  								<p class="tf">zip 1</p>
  								<h6 class="margin-bottom">1244</h6>
  							</div>
  						</div>

  						<hr style="width: 100%; color: black; height: 1px; background:1px solid rgba(0, 0, 0, 0.1)" />
  							<div class="row text-center">
  							<div class="col-md-6">
  								<p class="tf">Permanent Address </p>
  								<h6 class="margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h6>
  							</div>
  							
  							<div class="col-md-6">
  								<p class="tf">zip 1</p>
  								<h6 class="margin-bottom">1244</h6>
  							</div>
  						</div>
  						
  						
  					</div>
  				</div>
  			</div>


  			<div class="tab-pane" id="activity">



  			</div>
  			<!-- /.tab-pane -->

  			<div class="tab-pane" id="settings">
  				<form class="form-horizontal form-element col-12">
  					<div class="form-group row">
  						<label for="inputName" class="col-sm-2 control-label">Name</label>

  						<div class="col-sm-10">
  							<input type="email" class="form-control" id="inputName" placeholder="">
  						</div>
  					</div>
  					<div class="form-group row">
  						<label for="inputEmail" class="col-sm-2 control-label">Email</label>

  						<div class="col-sm-10">
  							<input type="email" class="form-control" id="inputEmail" placeholder="">
  						</div>
  					</div>
  					<div class="form-group row">
  						<label for="inputPhone" class="col-sm-2 control-label">Phone</label>

  						<div class="col-sm-10">
  							<input type="tel" class="form-control" id="inputPhone" placeholder="">
  						</div>
  					</div>
  					<div class="form-group row">
  						<label for="inputExperience" class="col-sm-2 control-label">Experience</label>

  						<div class="col-sm-10">
  							<textarea class="form-control" id="inputExperience" placeholder=""></textarea>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label for="inputSkills" class="col-sm-2 control-label">Skills</label>

  						<div class="col-sm-10">
  							<input type="text" class="form-control" id="inputSkills" placeholder="">
  						</div>
  					</div>
  					<div class="form-group row">
  						<div class="ml-auto col-sm-10">
  							<div class="checkbox">
  								<input type="checkbox" id="basic_checkbox_1" checked="">
  								<label for="basic_checkbox_1"> I agree to the</label>
  								&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
  							</div>
  						</div>
  					</div>
  					<div class="form-group row">
  						<div class="ml-auto col-sm-10">
  							<button type="submit" class="btn btn-orange">Submit</button>
  						</div>
  					</div>
  				</form>
  			</div>
  			<!-- /.tab-pane -->
  		</div>
  		<!-- /.tab-content -->
  	</div>
  	<!-- /.nav-tabs-custom -->
  </div>


  @endsection