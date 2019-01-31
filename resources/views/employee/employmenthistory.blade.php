<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="">

  <title>Shoppetown</title>

  <!-- Bootstrap 4.1.3-->
  <link rel="stylesheet" href="assets/vendor_components/bootstrap/css/bootstrap.css">

  <!-- Bootstrap-extend-->
  <link rel="stylesheet" href="css/bootstrap-extend.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">

  <!-- ionicons -->
  <link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">

  <!-- theme style -->
  <link rel="stylesheet" href="css/master_style.css">

  <!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/skins/_all-skins.css">

  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">

  <!-- Morris charts -->
  <link rel="stylesheet" href="assets/vendor_components/morris.js/morris.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


</head>

<body class="hold-transition skin-orange-light sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="#"  alt=""></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Shoppetown</span>
      </a>
      <!-- Header Navbar-->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account-->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
              </a>
              <ul class="dropdown-menu scale-up">
                <!-- User image -->
                <li class="user-header">
                  admin
                  <small class="mb-5">admin.com</small>

                  <div class="center">
                    <a href="#" class="btn  btn-block btn-primary">View Profile</a>
                  </div>
                  <br>
                  <div class="center">
                    <a href="#" class="btn btn-block btn-danger"> Log Out</a>
                  </div>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer center-block">

                </li>
              </ul>
            </li>

            <!-- Notifications -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">you have new notification</li></li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content-div">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> heheehehehe
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks-->


            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="image float-left">
            <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
          </div>
          <div class="info float-left">
            <p>admin</p>

          </div>
          <!-- search form -->

          <!-- /.search form -->
        </div>

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">

          <li class="treeview active">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Add information</span>
            </a>

          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Account list</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/layout/boxed.html">Employee Account</a></li>
              <li><a href="pages/layout/collapsed-sidebar.html">Human Resource Account</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>Manage</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="editprofile.html">Edit profile</a></li>
              <li><a href="archives.html">View Archive</a></li>

            </ul>
          </li>   

        </ul>
      </section>
      <!-- /.sidebar -->

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 style="color:#828894">
          Dashboard
          
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row"> <!-- start row -->

        </div>
        <!--  end  row -->			
        <div class="card" style="width: 80%;  box-shadow: 0 0 5px 1px #ccc; margin: auto;">
          <div class="card-header">
            <h4>Add Information</h4>
          </div>
          <div class="card-body" >

            <form>

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="addschool1">Company 1:</label>
                  <input type="txtCharacter" class="form-control" id="addschool1" placeholder="Enter your Company" aria-describedby="addschool1Help" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-12">
                  <label for="addaddress">Address:</label>
                  <input type="text" class="form-control" id="addaddress" placeholder="Enter your Address" aria-describedby="addaddressHelp" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="adddegree">Position:</label>
                  <input type="txtCharacter" class="form-control" id="adddegree" placeholder="Enter your Position" aria-describedby="adddegreeHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Inclusive Dates:</label>
                  <input type="date" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="addlastsalary">Last Salary:</label>
                  <input type="txtNumber" class="form-control" id="addlastsalary" placeholder="Enter your Last Last Salary" aria-describedby="addlastsalaryHelp" required="" onkeypress="return isNumberKey(event)"  maxlength="7">
                </div>
                <div class="form-group col-md-6">
                  <label for="addreasonforleaving">Reasons for leaving:</label>
                  <input type="txtCharacter" class="form-control" id="addreasonforleaving" placeholder="Enter your Reasons for leaving" aria-describedby="addreasonforleavingHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="addschool2">Company 2:</label>
                  <input type="txtCharacter" class="form-control" id="addschool2" placeholder="Enter your Company" aria-describedby="addschool1Help" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-12">
                  <label for="addaddress">Address:</label>
                  <input type="txtCharacter" class="form-control" id="addaddress" placeholder="Enter your Address" aria-describedby="addaddressHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-6">
                  <label for="adddegree">Position:</label>
                  <input type="txtCharacter" class="form-control" id="adddegree" placeholder="Enter your Position" aria-describedby="adddegreeHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Inclusive Dates:</label>
                  <input type="date" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="addlastsalary">Last Salary:</label>
                  <input type="txtNumber" class="form-control" id="addlastsalary" placeholder="Enter your Last Salary" aria-describedby="addlastsalaryHelp" required="" onkeypress="return isNumberKey(event)"  maxlength="7">
                </div>
                <div class="form-group col-md-6">
                  <label for="addreasonforleaving">Reasons for leaving:</label>
                  <input type="txtCharacter" class="form-control" id="addreasonforleaving" placeholder="Enter your Reasons for leaving" aria-describedby="addreasonforleavingHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
              </div>
              <hr>

                            <div class="row">
                <div class="form-group col-md-12">
                  <label for="addschool3">Company 3:</label>
                  <input type="txtCharacter" class="form-control" id="addschool3" placeholder="Enter your Company" aria-describedby="addschool1Help" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-12">
                  <label for="addaddress">Address:</label>
                  <input type="txtCharacter" class="form-control" id="addaddress" placeholder="Enter your Address" aria-describedby="addaddressHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-6">
                  <label for="adddegree">Position:</label>
                  <input type="txtCharacter" class="form-control" id="adddegree" placeholder="Enter your Position" aria-describedby="adddegreeHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Inclusive Dates:</label>
                  <input type="date" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="addlastsalary">Last Salary:</label>
                  <input type="txtNumber" class="form-control" id="addlastsalary" placeholder="Enter your Last Salary" aria-describedby="addlastsalaryHelp" required="" onkeypress="return isNumberKey(event)"  maxlength="7">
                </div>
                <div class="form-group col-md-6">
                  <label for="addreasonforleaving">Reasons for leaving:</label>
                  <input type="txtCharacter" class="form-control" id="addreasonforleaving" placeholder="Enter your Reasons for leaving" aria-describedby="addreasonforleavingHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
              </div>
              <hr>

                            <div class="row">
                <div class="form-group col-md-12">
                  <label for="addschool4">Company 4:</label>
                  <input type="txtCharacter" class="form-control" id="addschool4" placeholder="Enter your Company" aria-describedby="addschool1Help" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-12">
                  <label for="addaddress">Address:</label>
                  <input type="txtCharacter" class="form-control" id="addaddress" placeholder="Enter your Address" aria-describedby="addaddressHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="form-group col-md-6">
                  <label for="adddegree">Position:</label>
                  <input type="txtCharacter" class="form-control" id="adddegree" placeholder="Enter your Position" aria-describedby="adddegreeHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Inclusive Dates:</label>
                  <input type="date" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="addlastsalary">Last Salary:</label>
                  <input type="txtNumber" class="form-control" id="addlastsalary" placeholder="Enter your Last Salary" aria-describedby="addlastsalaryHelp" required="" onkeypress="return isNumberKey(event)"  maxlength="7">
                </div>
                <div class="form-group col-md-6">
                  <label for="addreasonforleaving">Reasons for leaving:</label>
                  <input type="txtCharacter" class="form-control" id="addreasonforleaving" placeholder="Enter your Reasons for leaving" aria-describedby="addreasonforleavingHelp" required="" onkeypress="return isNumericKey(event)">
                </div>
              </div>


              <button type="submit" class="btn btn-add-new float-right">Create</button>
            </form>
            <div class="row">
              <nav aria-label="... " class="nav-pagination" style="text-align: center;">
                <ul class="pagination text-center">
                  <li class="page-item"><a class="page-link" href="addinformation3.html">Previous</a>

                  </li>
                  <li class="page-item"><a class="page-link" href="addinformation.html">1</a></li>
                  <li class="page-item"><a class="page-link" href="addinformation2.html">2</a><li>
                    <li class="page-item"><a class="page-link" href="addinformation3.html">3</a></li>
                    <li class="page-item active"><a class="page-link" href="addinformation4.html">4</a><li>
                      <li class="page-item"><a class="page-link" href="addinformation5.html">5</a></li>
                      <li class="page-item"><a class="page-link" href="addinformation6.html">6</a></li>
                      <li class="page-item">
                        <a class="page-link" href="addinformation5.html">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <br>
                <br>

                <div class="spacer">
                </div>
                <br>

              </div>
            </div>


          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right d-none d-sm-inline-block">

          </div>Copyright &copy; 2018 <a href="#">Shoppetown</a>. All Rights Reserved.
        </footer>


        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

      </div>
      <!-- ./wrapper -->

      <!-- jQuery 3 -->
      <script src="assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

      <!-- popper -->
      <script src="assets/vendor_components/popper/dist/popper.min.js"></script>

      <!-- Bootstrap 4.1.3-->
      <script src="assets/vendor_components/bootstrap/js/bootstrap.js"></script>	

      <!-- ChartJS -->
      <script src="assets/vendor_components/chart-js/chart.js"></script>

      <!-- Sparkline -->
      <script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

      <!-- jvectormap -->
      <script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
      <script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>	

      <!-- Morris.js charts -->
      <script src="assets/vendor_components/raphael/raphael.min.js"></script>
      <script src="assets/vendor_components/morris.js/morris.min.js"></script>

      <!-- Slimscroll -->
      <script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

      <!-- FastClick -->
      <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>

      <!-- Minimal-art Admin App -->
      <script src="js/template.js"></script>

      <!-- Minimal-art Admin dashboard demo (This is only for demo purposes) -->
      <script src="js/pages/dashboard.js"></script>

      <!-- Minimal-art Admin for demo purposes -->
      <script src="js/demo.js"></script>
      <script type="text/javascript">
        function isNumberKey(evt)
        {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
            return false;
          return true;
        }  


        function isNumericKey(evt)
        {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
            return true;
          return false;
        } 
      </script>


    </body>

    </html>
