<!DOCTYPE html>
<html>
<head>
	<title>Shoppetown</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1.0>
	
	<!-- Stylesheets -->
	<link rel="shortcut icon" type="image/x-icon" src="assets/images/iconsshoppetown_icon.ico" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.5.0-web/css/all.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

	<style type="text/css">
	html, body {
		
		padding: 0;
		font-family: ;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/login-formbg.jpg'); 
	}

	.formlogin 
	{
		margin-top:80px;
		background: #fff;
		box-shadow: 0 0 10px 1px grey;
		padding: 30px;
		border-bottom: solid 5px  #f87f0c;
	}

	.btn-login 
	{
		color: #fff;
		transition: all 0.3s ease 0s;
		background-color: #337ab7;
		font-size: 15px;
		width: 100%;
		border-radius: 0px;
		padding: 15px;
	}


	.btn-login:hover 
	{
		/*border-bottom: solid 5px  #f87f0c;*/
		color:#fff;
		background-color: #f87f0c;
	}

	.modal-header img 
	{
		width: 100%;
		z-index: 5;
		position: static;
		left:calc(50% - 50px);

		top:25px;
	}
	#prima{

		border-bottom: solid 5px  #337ab7;
	}
	#mod {
		border-bottom: solid 5px  #f87f0c;
	}
	label {
		color: #7d7d7d;
		font-size: 16px;
	}

	a {
		font-size: 12px !important;
		color:#337ab7;
	}
	.input-group-text {
		background: #fff;
		color:#337ab7;
	}
	.input-group-text > span > i {
		background: #337ab7;
	}
	a:hover{
		text-decoration: none;
	}

	#change {
		background: #337ab7;
		color: #fff;
	}
	#back {
		background: #fff;
		color:#337ab7;
	}

	.avatar img 
	{
		height: 90px;
		width: 90px;
		z-index: 4;
		position: absolute;
		left:calc(50% - 43px);
		top:-42px;
	}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="formlogin col-md-4 offset-md-4" id="mod">
					<div class="form-header">
						<div class="avatar">
							<img src="assets/images/user-logo.png" id="avatar" class="">
						</div>
						<div class="modal-header"> 
							<img src="assets/images/official-logo.png"/>
						</div> 
					</div>
					<form action="{{ url('/home') }}">
						<div class="form-group">
							<label for="user"></label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="usern"><i class="fa fa-user"></i></span>
								</div>
								<input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Username">
							</div>
						</div>

						<div class="form-group">

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="pwd"><i class="fa fa-lock"></i></span>
								</div>
								<input type="password" class="form-control" id="user" aria-describedby="" placeholder="Password">
							</div>
						</div>

						<button class="btn btn-login" href="" type="submit"  onmouseover="Changecolor()" onmouseleave="Backcolor()">Log in</button>
					</span></label>
				</form>
			</div>
		</div>

	</div>
</div>





<script type="text/javascript">
	var div = document.getElementById("mod");



	function Changecolor()
	{
		div.setAttribute("id", "prima");
	}
	function Backcolor()
	{
		div.setAttribute("id", "mod");
	}


</script>
<script type="text/javascript" src="assets/customjs/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/fontawesome-free-5.5.0-web/js/all.min.js"></script>
</body>
</html>