@extends('frontend.layouts.frontend_master')

@section('content')
<!--============head_top============-->


</section>

<section class="about_banner">
  <div class="container-fluid">
    <div class="row"> <div class="abt_banner_cnt">
   <h5>Who We Are</h5>
      <h3>Stay Saiph – The Star you Trust</h3>
  </div>     </div>
  </div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="abt_cnt">
  <div class="container">
    <div class="row">
      <div class="abt_cnt_div">
        @foreach($homecontent as $key => $eachhomecontent)
        {!! $eachhomecontent->content !!}
     @endforeach
      </div>
    </div>
  </div>
</section>
<!--============our_services_ends============--> 
<!--============featured============-->
<section class="our_services_s">
  <div class="container">
    <div class="row">
      <h5>Our Services</h5>
      <h3>Stay Saiph – The Star you Trust</h3>
    </div>
    <div class="row">
      <div class="sevice_white_box_main">
        <div class="white_box_s">
          <div class="white_s_img"> <img src="{{ asset('public/img/chekup.png') }}" alt="" class="img-fluid mx-auto d-block checkup"> </div>
          <h2>Check up during cleaning</h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
        </div>
        <div class="white_box_s" >
          <div class="white_s_img"> <img src="{{ asset('public/img/disinfec.png') }}" alt="" class="img-fluid mx-auto d-block disinfec"> </div>
          <h2>1 check up during<br>
            disinfecting</h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,</p>
        </div>
        <div class="white_box_s">
          <div class="white_s_img"> <img src="{{ asset('public/img/pic.png') }}" alt="" class="img-fluid mx-auto d-block disinfec"> </div>
          <h2>Pictures & confirmation<br>
            sent via email</h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
        </div>
        <div class="white_box_s">
          <div class="white_s_img"> <img src="{{ asset('public/img/disinfec.png') }}" alt="" class="img-fluid mx-auto d-block disinfec"> </div>
          <h2>Swab results via<br>
            email </h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!--============featured_ends============--> 

<!--============featured============-->
<section class="bookan_audit">
  <div class="container">
    <div class="row">
      <h5>Services</h5>
      <h3>Book an audit now!</h3>
      <p class="p_mb">Contrary to popular belief, Lorem Ipsum is not simply random text. It has</p>
    </div>
    <div class="row">
      <div class="bookan_audit_main">
        <div class="blue_box_first">
          
          <h2>Basic Audit </h2>
          <h1>$29.99 Room Only</h1>
         
          <ul class="blue_box_first_list">
              <li>On site audit check up </li>
              <li>Pictures of the process</li>
              <li>Certified audit report</li>
            </ul>
            <input type="button" value="BOOK NOW" class="bookan_audit_book_now mt_117">
        </div>
        
      <div class="blue_box_sec">
          
          <h2>Premium Audit </h2>
          <h1>$39.99/month</h1>
          <p>plus Bathroom, Kitchen and other areas</p>
          <ul class="blue_box_sec_list">
              <li>3 check ups </li>
              <li>3 swap tests </li>
              <li>Pictures via email</li> 
              <li>Swab results via email
</li>              
            </ul>
            <input type="button" value="BOOK NOW" class="bookan_audit_book_now mt_100">
        </div>  
        
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
@section('script')
<script>	$(document).on("scroll", function(){
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