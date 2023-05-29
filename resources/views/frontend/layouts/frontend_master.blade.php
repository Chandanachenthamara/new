<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
<link href="{{ asset('public/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/css/owl.theme.green.css') }}" rel="stylesheet" type="text/css">
<title>SAIPH</title>
</head>
<body>

<!--============head_top============-->
<section class="head_top">
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner"> 
        
        <!-- Brand --> 
        <a class="navbar-brand" href="#"> SAIPH </a> 
        
        <!-- Toggler/collapsibe Button -->
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>-->
        
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">      
  <div class="menu-btn">
        <span class="top"></span>
        <span class="mid"></span>
        <span class="bot"></span>
      </div>  </button>    
        
        
        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse nav_div_saiph" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link" href="{{ route('frontend-home') }}">Home</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{ route('frontend-about') }}">About</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{ route('frontend-services') }}"> Services</a> </li>
            <!-- 2 -->
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{ route('frontend-hotel') }}"> Hotels</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{ route('frontend-contact') }}">Contact us</a> </li>
             <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{ route('frontend-register') }}">Register</a> </li>
          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <button class="btn book_audit my-2 my-sm-0" type="book">Book Audit<img src="img/arrow_btn.png" class="arrow_btn"></button>
          </form>-->
        </div>
      </nav>
    </div>
  </div>
</section>

<!--============head_top_ends============--> 

<!--============banner============-->

@yield('content')



<!--============featured_ends============--> 
<!--============footer============--> 
<section class="footer">
  <div class="container">
    <div class="row">
  <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12 col-12">
  <h2>SAIPH</h2>
   <ul class="ftr_one">
              <li><a href="{{ route('frontend-home') }}">Home</a>

 </li>
              <li><a href="{{ route('frontend-services') }}">Services </a></li>
              <li><a href="{{ route('frontend-about') }}">About</a></li>
              
            </ul>
            <ul class="ftr_two">
              
              <li><a href="{{ route('frontend-contact') }}">Contact </a></li>
              <li><a href="{{ route('frontend-faq') }}">Faq</a></li>
              
            </ul>
  </div>
  <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12 col-12 icon_bx_main">
  <div class="icon_block">
  <div class="icon_img"><img src="{{ asset('public/img/mob.png') }}"></div>
   <div class="icon_content">
   <h5>CALL US TODAY</h5>
   <p>(2124) 532-4353</p>
   </div>
  </div>
  <div class="icon_block">
  <div class="icon_img_b"><img src="{{ asset('public/img/book.png') }}"></div>
   <div class="icon_content">
   <h5>BOOK AN ADUTIT</h5>
   <h6>Contrary to popular belief, Lore</h6>
   </div>
  </div>
  
  <div class="icon_block_loc">
  <div class="icon_img"><img src="{{ asset('public/img/loc.png') }}"></div>
   <div class="icon_content_loc">
   <h5>LOCATION</h5>
   <p>95 Sugar Road Auburn, NY 13021</p>
   </div>
  </div>
  
  </div>  
    
 </div>
  </div>
</section><!--first--> 


<section class="footer_btm">
  <div class="container">
    <div class="row">
     <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12">
     <p class="left">© 2020 Saiph.com</p>
     </div>
     <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
       <p class="right"><span><a href="#">Terms & Agreements  I</a></span>Privacy policy</p>
     </div>
     
    </div>
    </div>
    </section>
    <section class="footer_dwn">
    </section>   
    
<!--============footer============--> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 

<script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script> 
<script src="{{ asset('public/js/popper.js') }}"></script> 
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script> 
 
    
</body>
@yield('script')
</html>
    



























