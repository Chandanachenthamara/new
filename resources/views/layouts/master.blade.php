<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAIPH</title>

  <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/custom-admin.css') }}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link logo-text">
      {{--   <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">SAIPH</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex logo-text ml-5">
          <div class="info">

            {{-- ucfirst(auth()->guard('admin')->user()->name) --}}
          </div>
          <div class="info">
            <div >
                <a c href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </div>
        </div>

    

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           {{--  <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Starter Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Active Page</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                {{-- <i class="nav-icon fas fa-th"></i> --}}
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Dashboard                 
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('contactview') }}" class="nav-link">
                {{-- <i class="nav-icon fas fa-th"></i> --}}
                <i class="nav-icon fa fa-solid fa-ticket"></i>
                <p>
                  Contacts           
                </p>
              </a>
            </li>

             <li class="nav-item">
              <a href="{{ route('banners') }}" class="nav-link">
                {{-- <i class="nav-icon fas fa-th"></i> --}}
                <i class="nav-icon fa fa-solid fa-ticket"></i>
                <p>
                  Banners           
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('employees') }}" class="nav-link">
                {{-- <i class="nav-icon fas fa-th"></i> --}}
                <i class="nav-icon fa fa-solid fa-ticket"></i>
                <p>
                  Employees           
                </p>
              </a>
            </li>
              <button class="dropdown-btn">CMS



    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="{{ route('homecontents') }}" style="display: block;">Home</a>
    <a href="{{ route('hotels') }}" style="display: block;">Hotels</a>
  </div>
              
        
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        SAIPH
      </div>
      <!-- Default to the left -->2022 <a href="#">SAIPH</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('public/js/app.js') }}"></script>
</body>

</html>
<style type="text/css">
  .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: black;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>

<script type="text/javascript">
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
$(function () {
  /*** add active class and stay opened when selected ***/
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.nav-sidebar a').filter(function() {
      if (this.href) {
          return this.href == url || url.href.indexOf(this.href) == 0;
      }
  }).addClass('active');

  // for the treeview
  $('ul.nav-treeview a').filter(function() {
      if (this.href) {
          return this.href == url || url.href.indexOf(this.href) == 0;
      }
  }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');


    // var url = window.location;
    // // for single sidebar menu
    // $('ul.nav-sidebar a').filter(function () {
    //     return this.href == url;
    // }).addClass('active');

    // // for sidebar menu and treeview
    // $('ul.nav-treeview a').filter(function () {
    //     return this.href == url;
    // }).parentsUntil(".nav-sidebar > .nav-treeview")
    //     .css({'display': 'block'})
    //     .addClass('menu-open').prev('a')
    //     .addClass('active');
});
</script>




























