<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('icons/shoppetown_icon.ico')}}">

  <title>Shoppetown</title>
  

  <!-- Bootstrap 4.1.3-->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

  <!-- Bootstrap-extend-->
  <link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

  <!-- font awesome -->
  <link rel="stylesheet" href="{{asset('vendors/vendor_components/font-awesome/css/font-awesome.css')}}">

  <!-- ionicons -->
  <link rel="stylesheet" href="{{asset('vendors/vendor_components/Ionicons/css/ionicons.css')}}">

  <!-- theme style -->
  <link rel="stylesheet" href="{{asset('css/master_style.css')}}">

  <!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('css/_all-skins.css')}}">

  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('vendors/vendor_components/jvectormap/jquery-jvectormap.css')}}">

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<style type="text/css">
.spacer {
  padding: 100px;
}
html, body {
  min-height: 1000px;
  bottom: 0px;
  height: 100%;
}

.wrapper {
  min-height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.skin-orange-light .sidebar i{
  color:orange;
}

.icon-view {
  color:#1abc9c;
}
.icon-edit {
  color: #95a5a6;
}
.icon-del {
  color: #fc5c65;
}
.btn-add-new {
  background: #2d6a9f;
  border-color:#2d6a9f;
  color: #fff;
}
.btn-add-new:hover {
  background: #45aef1;
  border-color:#45aef1;
  color: #fff;
}

.user-panel {
  text-align: center;
  padding: 20px;

}
.user-panel h3 {
  color: #fff;
}
.tf {
  color: #999;
  font-size: 16px;
}
.page span > i {
  font-size: 20px;
  color:blue;
}

</style>


</head>

<body class="hold-transition skin-orange-light sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="/admin" class="logo">
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


            <!-- Notifications -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i> 
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">you have new notification</li>
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
            </li> <!-- end notif -->

            <!-- User Account-->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" style="font-size: 18px;"></i><span>admin</span>
              </a>
              <ul class="dropdown-menu scale-up">
                <!-- User image -->
                <li class="user-header">
                  admin
                  <small class="mb-5">admin@gmail.com</small>

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
            <!-- e user acc-->


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

          <h3>admin</h3>

          <!-- search form -->

          <!-- /.search form -->
        </div>

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">

          <li class="active">
            <a href="{{ url('/home/dashboard') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>

            </a>

          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>System Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/systemsettings/user">User</a></li>
              <li><a href="/systemsettings/department">Department</a></li>
              <li><a href="/systemsettings/role">Role</a></li>
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
              <li><a href="{{ url('userarchive') }}">View Archive</a></li>

            </ul>
          </li>   

        </ul>
      </section>
      <!-- /.sidebar -->

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br><br>
      @yield('bread')
      @show


      <!-- Main content -->
      <section class="content">
        <div class="row"> <!-- start row -->

          @yield('body')
          @show




        </div>
        <!--  end  row -->			


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <div class="pull-right d-none d-sm-inline-block">

      </div>Copyright &copy; 2018 <a href="#">Shoppetown</a>. All Rights Reserved.
    </footer>




  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <!-- popper -->
  <script src="{{asset('vendors/vendor_components/popper/dist/popper.min.js')}}"></script>

  <!-- Bootstrap 4.1.3-->
  <script src="{{asset('vendors/vendor_components/bootstrap/js/bootstrap.js')}}"></script>	

  <!-- ChartJS -->
  <script src="{{asset('vendors/vendor_components/chart-js/chart.js')}}"></script>

  <!-- Sparkline -->
  <script src="{{asset('vendors/vendor_components/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

  <!-- jvectormap -->
  <script src="{{asset('vendors/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>	
  <script src="{{asset('vendors/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>	

  <!-- Morris.js charts -->{{-- 
  <script src="/js/assets/vendors_components/raphael/raphael.min.js"></script>
  <script src="/js/assets/vendors_components/morris.js/morris.min.js"></script> --}}

  <!-- Slimscroll -->
  <script src="{{asset('vendors/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/data-table.js')}}"></script>

  <!-- FastClick -->
  <script src="{{asset('vendors/vendor_components/fastclick/lib/fastclick.js')}}"></script>

  <!-- Minimal-art Admin App -->
  <script src="{{asset('js/template.js')}}"></script>

  <!-- Minimal-art Admin dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('js/dashboard.js')}}"></script>

  <!-- This is data table -->
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>

  <!-- start - This is for export functionality only -->
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('vendors/vendor_components/morris.js/morris.min.js')}}"></script>
  <!-- end - This is for export functionality only -->



</body>

</html>
