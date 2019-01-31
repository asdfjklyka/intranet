<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOPPETOWN</title>
	<!-- Stylesheets -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome-free-5.5.0-web/css/fontawesome.min.css')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/design.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign out</a></li>
					</ul>
				</div>
			</nav>




			<!-- Start of name header -->
			<div class="container-header">
				<h2>Joe Doe</h2>
				<h4>Manager</h4>
				<h4>1</h4>
			</div>
			<!-- End of name header -->

			<div class="col-sm-12 product-tabs">
				<!-- Start of tab menu -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Personal Information</a></li>
					<li class=""><a href="#tab2" data-toggle="tab">Desired Position</a></li>
					<li class=""><a href="#tab3" data-toggle="tab">Education & Employment History</a></li>
					<li class=""><a href="#tab4" data-toggle="tab">Seminar Attended</a></li>
					<li class=""><a href="#tab5" data-toggle="tab">References</a></li>
				</ul>
				<!-- End of tab menu -->

				<!-- Start of tab content -->
				<div class="tab-content">

					<!-- Start Personal Information -->
					<div class="tab-pane active" id="tab1">
						<div class="table-division">
							<div class="table">
								<table class="table-borderless" id="pi_table_print">
									<tbody>
										<tr>
											<td><b>Name: </b></td>
											<td colspan="3" id="name" name="name" placeholder="name"></td>
											<td><b>Nickname: </b></td>
											<td id="nickname" name="nickname" placeholder="nickname"></td>
											<td><b>Language(s)</b></td>
											<td id="language" name="language" placeholder="language"></td>
										</tr>
										<tr>
											<td><b>Permanent Address: </b></td>
											<td colspan="5" id="peradd" name="peradd" placeholder="peradd"></td>
											<td><b>Zipcode: </b></td>
											<td>3022</td>
										</tr>
										<tr>
											<td><b>Current Address: </b></td>
											<td colspan="5" id="curadd" name="curadd" placeholder="curadd"></td>
											<td><b>Zipcode: </b></td>
											<td id="Zipcode" name="Zipcode" placeholder="Zipcode"></td>
										</tr>
										<tr>
											<td><b>Sex: </b></td>
											<td>Male</td>
											<td><b>Birthdate: </b></td>
											<td>01/01/1995</td>
											<td><b>Civil Status: </b></td>
											<td>Single</td>
											<td><b>Contact Number: </b></td>
											<td>0987-976-0089</td>
										</tr>
										<tr>
											<td><b>Age: </b></td>
											<td>23</td>
											<td><b>Nationality: </b></td>
											<td>Filipino</td>
											<td><b>Religion: </b></td>
											<td>Catholic</td>
											<td><b>E-mail: </b></td>
											<td>joedoe@gmail.com</td>
										</tr>
										<tr>
											<td><b>TIN: </b></td>
											<td>&nbsp;</td>
											<td><b>HDMF: </b></td>
											<td>&nbsp;</td>
											<td><b>SSS: </b></td>
											<td>&nbsp</td>
											<td><b>PHILHEALTH: </b></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="8" class="title-division"><b>Person to contact</b><i>(incase of emergency)</i></td>
										</tr>
										<tr>
											<td><b>Name: </b></td>
											<td colspan="3">Amy Doe</td>
											<td><b>Relationship: </b></td>
											<td>Wife</td>
											<td><b>Contact: </b></td>
											<td>0975-946-1087</td>
										</tr>
										<tr>
											<td><b>Address: </b></td>
											<td colspan="7">California, USA</td>
										</tr>
									</tbody>
								</table>
								<br>		
							</div>
						</div>
					</div>
					<!-- End Personal Information -->



					<!-- Start Hire Information -->
					<div class="tab-pane" id="tab2">
						<div class="table"  id="dp_table_print">
							<div class="table-division">
								<table class="table-borderless">
									<tbody>
										<tr>
											<td><b>Position Applying For: </b></td>
											<td colspan="3">Manager</td>
											<td><b>Date Applied: </b></td>
											<td>06/11/18</td>
											<td><b>Date Hired: </b></td>
											<td>0612/18</td>
										</tr>
										<tr>
										</tr>
										<td><b>Employment Desired: </b></td>
										<td colspan="4">Seasonal</td>
										<td><b>Expected Salary</b>(<i>Monthly</i>)<b>:</b></td>
										<td colspan="2">10,000</td>
									</tr>
									<tr>
										<td colspan="5"><b><i>Where did you hear the company?</i></b></td>
										<td colspan="5">Friend</td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Willing to submit background check?</i></b></td>
									</tr>
									<tr>
										<td colspan="2"><b>Yes/No</b></td>
										<td colspan="8">Yes</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="table-division">
							<table class="table-borderless">
								<tbody>
									<tr>
										<td colspan="10" class="title-division"><b>Questions to be answered</b></td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 1</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Are you presently employed?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">Yes</td>
										<td><b><b><i>If yes, whom do you suggest we contact?</i></b></b></td>
										<td colspan="6">Anyone inside the company</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 2</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Have you ever applied before?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">Yes</td>
										<td><b><b><i>If yes, when?</i></b></b></td>
										<td colspan="6">Start of the beginning</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 3</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Were you ever applied here?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">Yes</td>
										<td><b><b><i>If yes, when?</i></b></b></td>
										<td colspan="6">Start of the beginning</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 4</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Do you have any relatives or friend inside the company?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">Yes</td>
										<td><b><b><i>If yes, who?</i></b></b></td>
										<td colspan="6">Jane Roe, my friend</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 5</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Willing to have additional worplace out of your job?</i></b></td>
									</tr>
									<tr>
										<td colspan="2"><b>Yes/No?</b></td>
										<td colspan="8">Yes</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 6</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Have you ever been fired from a job or asked to resign?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">No</td>
										<td><b><b><i>If yes, who?</i></b></b></td>
										<td colspan="6">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="10" class="title-division"><b>Question 7</b></td>
									</tr>
									<tr>
										<td colspan="10"><b><i>Have you ever been convicted of any law violation or crime?</i></b></td>
									</tr>
									<tr>
										<td><b>Yes/No?</b></td>
										<td colspan="2">No</td>
										<td><b><b><i>If yes, explain?</i></b></b></td>
										<td colspan="6">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End Hire Information -->


				<!-- Start School and Company -->
				<div class="tab-pane" id="tab3">
					<div class="table"  id="eae_table_print">
						<div class="table-division">
							<table class="table-borderless">
								<tbody>
									<tr>
										<td colspan="8" class="title-division"><b>Educational History</b></td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>School No. 1</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>School: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Location: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Degree/Awards Recieved: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Years Attended: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>School No. 2</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>School: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Location: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Degree/Awards Recieved: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Years Attended: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>School No. 3</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>School: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Location: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Degree/Awards Recieved: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Years Attended: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>School No. 4</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>School: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Location: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Degree/Awards Recieved: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Years Attended: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>




						<div class="table-division">
							<table class="table-borderless">
								<tbody>
									<tr>
										<td colspan="8" class="title-division"><b>Employment History</b></td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>Company No. 1</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>Company: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Address: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Position: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Inclusive Dates: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Last Salary: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Reasons for leaving: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>Company No. 2</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>Company: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Address: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Position: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Inclusive Dates: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Last Salary: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Reasons for leaving: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>Company No. 3</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>Company: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Address: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Position: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Inclusive Dates: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Last Salary: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Reasons for leaving: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="8" class="title-division"><b>Company No. 4</b></td>
									</tr>
									<tr>
										<td class="table-title"><b>Company: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Address: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Position: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Inclusive Dates: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Last Salary: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td><b>Reasons for leaving: </b></td>
										<td colspan="3">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End School and Company -->


				<!-- Start Training Information -->
				<div class="tab-pane" id="tab4">
					<div class="table-division"  id="sa_table_print">
						<table class="table-borderless">
							<tbody>
								<tr>
									<td colspan="8" class="title-division"><b>Seminar No. 1</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Title: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Place: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Date: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Orgaized by: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Seminar No. 2</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Title: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Place: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Date: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Orgaized by: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Seminar No. 3</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Title: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Place: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Date: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Orgaized by: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Seminar No. 4</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Title: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Place: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Date: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Orgaized by: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Seminar No. 5</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Title: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Place: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Date: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td><b>Orgaized by: </b></td>
									<td colspan="3">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Training Information -->


				<!-- Start Training Information -->
				<div class="tab-pane" id="tab5">
					<div class="table-division" id="ref_table_print">
						<table class="table-borderless">
							<tbody>
								<tr>
									<td colspan="8" class="title-division"><b>Reference No. 1</b></td>
								</tr>
								<tr>
									<td class="table-title"><b>Name: </b></td>
									<td colspan="3">Jane Moe</td>
								</tr>
								<tr>
									<td><b>Title: </b></td>
									<td colspan="3">CEO</td>
								</tr>
								<tr>
									<td><b>Company: </b></td>
									<td colspan="3">Pisonet</td>
								</tr>
								<tr>
									<td><b>Contact: </b></td>
									<td colspan="3">0976-123-2345</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Reference No. 2</b></td>
								</tr>
								<tr>
									<td><b>Name: </b></td>
									<td colspan="3">Jay Loe</td>
								</tr>
								<tr>
									<td><b>Title: </b></td>
									<td colspan="3">Manager</td>
								</tr>
								<tr>
									<td><b>Company: </b></td>
									<td colspan="3">Comshop</td>
								</tr>
								<tr>
									<td><b>Contact: </b></td>
									<td colspan="3">0976-134-2265</td>
								</tr>
								<tr>
									<td colspan="8" class="title-division"><b>Reference No. 3</b></td>
								</tr>
								<tr>
									<td><b>Name: </b></td>
									<td colspan="3">Jaze Toe</td>
								</tr>
								<tr>
									<td><b>Title: </b></td>
									<td colspan="3">Janitor</td>
								</tr>
								<tr>
									<td><b>Company: </b></td>
									<td colspan="3">Coleman</td>
								</tr>
								<tr>
									<td><b>Contact: </b></td>
									<td colspan="3">0966-231-2021</td>
								</tr>
							</tbody>
						</table>
					</div>
					<center><button class="btn btn-info btn_print" id="ref_button_print">Print</button></center>
				</div>
				<!-- End Training Information -->


			</div>
			<!-- End of tab content -->
		</div>
	</div>
</div>





<!-- Start of scripts -->
<script src="{{asset('js/jquery.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<!-- End of scripts -->

</body>
</html>