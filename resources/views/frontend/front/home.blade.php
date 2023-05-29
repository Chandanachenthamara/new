@extends('frontend.layouts.frontend_master')

@section('content')
<!--============head_top============-->


</section>

<!--============head_top_ends============--> 
<!--============menu============--> 

<!--============menu_ends============--> 
<!--============banner============-->

<section class="banner">
  <div class="container-fluid">
   <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          @foreach($banner as $key => $eachbanner)
          <div class="carousel-item @if($key == 0) {{ "active" }} @endif"> <img class="d-block w-100" src="{{ asset('storage/app/public/images/'.$eachbanner->image) }}" alt="First slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>{{ $eachbanner->title }}
          </p>
            </div>
            <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{ asset('public/img/arrow_btn.png') }}" class="arrow_btn"></button>
            </form>
          </div>
          @endforeach
          <!-- <div class="carousel-item"> <img class="d-block w-100" src="{{ asset('public/img/banner_1.jpg') }}" alt="First slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>We are here to provide<br>
                you a <span class="blue_text">piece</span> of mind </p>
            </div>
            <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{ asset('public/img/arrow_btn.png') }}" class="arrow_btn"></button>
            </form>
          </div>
          <div class="carousel-item"> <img class="d-block w-100" src="{{ asset('public/img/banner_2.jpg') }}" alt="Second slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>Relax in the knowledge <br>
               of  <span class="blue_text">safety</span> </p>
            </div>
             <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{ asset('public/img/arrow_btn.png') }}" class="arrow_btn"></button>
            </form>
          </div> -->
          <!-- <div class="carousel-item"> <img class="d-block w-100" src="{{ asset('public/img/banner_3.jpg') }}" alt="Third slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>Immaculate. Pristine. Clean </p>
            </div>
             <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{ asset('public/img/arrow_btn.png') }}" class="arrow_btn"></button>
            </form>
          </div> -->
          
          
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{ asset('public/img/ar_l.png') }}" class="arrow_btn_control"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{ asset('public/img/ar_r.png') }}" class="arrow_btn_control"></span>
    <span class="sr-only">Next</span>
  </a> 
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<!--============banner_ends============--> 
<!--============about============-->
<section class="about">
 <div class="container-fluid">
  <div class="container">
    <div class="row">
      @foreach($homecontent as $key => $eachhomecontent)
      <h3>{{ $eachhomecontent->title }}</h3>
      <div class="u_line"></div>
      <div class="content">
        {!! $eachhomecontent->content !!}
     @endforeach
      </div>
    </div>
  </div></div>
</section>

<!--============about_ends============--> 

<!--============how_it_works============-->
<section class="how_it_works">
 <div class="container-fluid">
<div class="row">
  
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  
  <h3>How it Works</h3>
  <div class="hu_line"></div>
</div>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
  <div class="hw_it_left">
    @foreach($home as $key => $eachhome)
    <?php 
    if($key==0){ $img='one.jpg'; }
    if($key==1){ $img='two.jpg'; }
    if($key==2){ $img='three.jpg'; }
    ?>
    <div class="hw_box">
      <div class="hw_box_img"> <img class="d-block img-fluid" src="{{ asset('public/img/'.$img) }}"> </div>
      <div class="hw_box_cnt">
        <h3>{{ $eachhome->title }}</h3>
        <p>{{ $eachhome->content }}</p>
      </div>
    </div>
    @endforeach
    <!--hw_box-->
    
    <!--hw_box--> 
    
  </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
  <div class="row"> <img class="d-block img-fluid mx-auto" src="{{ asset('public/img/hw_it.jpg') }}"> </div>
</div>

</div>
</div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="our_services">
  <div class="container">
    <div class="row">
      <h3>Our  Services</h3>
      <div class="u_line_w"></div>
      <p class="p_mb">Contrary to popular belief, Lorem Ipsum is not simply random text.  It has roots</p>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="white_box box_right">
          <div class="white_box_inr">
          <div class="white_box_title">
            <h2>Basic Audit <br><span>$29.99 Room Only</span></h2>
            </div>
            
            <div class="su_line"></div>
            <ul class="service_list">
              <li>On site audit check up </li>
              <li>Picture of the process </li>
              <li>Certified audit report</li>
            </ul>
            </div>
            <input type="button" value="BOOK NOW" class="book_now">
          
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="white_box box_left">
          <div class="white_box_inr">
          <div class="white_box_title">
            <h2>Premium Audit <br><span>$39.99/month</span></h2>
            <p>plus Bathroom, Kitchen and other areas </p>
            </div>
            <div class="su_line"></div>
            <ul class="service_list">
              <li>3 check ups </li>
              <li>3 swap tests </li>
              <li>Pictures via email</li>
              <li>Swab results via email</li>
            </ul>
             </div>
            <input type="button" value="BOOK NOW" class="book_now">
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--============our_services_ends============--> 
<!--============featured============-->
<section class="featured">
  <div class="container-fluid">
    <div class="row">
      <h3>Featured <span>Hotels</span></h3>
      <div class="fu_line"></div>
      <p>Contray to popular belief, Lorem ipsum is not simply random text. It has roots</p>
      <div class="owl-carousel active_testimonial"> 
        <!-- single testi -->
        <div class="single_sector"> <img src="{{ asset('public/img/mh.jpg') }}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi -->
        
        <div class="single_sector"> <img src="{{ asset('public/img/lg.jpg') }}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi -->
        <div class="single_sector"> <img src="{{ asset('public/img/hw.jpg') }}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
          <div class="single_sector"> <img src="{{ asset('public/img/pch.jpg') }}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
          <div class="single_sector"> <img src="{{ asset('public/img/mh.jpg') }}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
        
      </div>
    </div>
  </div>
</section>
<!--============featured_ends============-->
@endsection
@section('script')
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script>  $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 2){
      $("#banner").addClass("shrink");
    }
    else
    {
      $("#banner").removeClass("shrink");
    }
  });</script>
    <script>
  $('.active_testimonial').owlCarousel({
    items:4,
    loop: true,
    dots: false,
    autoplay: false,
    nav: true,
    navText: [ "<img src='{{ asset('public/img/cprev.png') }}'>", "<img src='{{ asset('public/img/cnext.png') }}'>" ],
   responsive:{
        0:{
            items:1
        },
        500:{
            items:1
        },
    600:{
            items:2
        },
    800:{
            items:2
        },
    900:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
 
  
  </script>
    <script>  
    
    $(document).ready(function() {

  var $menuBtn = $('.menu-btn');
  var $nav = $('#nav');
  var $stylebox = $('#style-box');
  var $styleli = $stylebox.find('li');

  $menuBtn.on('click', function() {
    var $this = $(this);
    var styles = $stylebox.data('styles');
    $this.toggleClass("active");
    $this.next('#nav').toggleClass("open");
    $stylebox.toggleClass(styles);
  });
  });
 
  
  </script>
@endsection