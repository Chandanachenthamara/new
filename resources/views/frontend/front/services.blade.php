@extends('frontend.layouts.frontend_master')

@section('content')
<!--============head_top============-->


</section>

<section class="services_banner">
  <div class="container">
   <div class="row">
  <div class="srce_banner_cnt">
   <h5>Saiph</h5>
      <h3>Services</h3>
  </div>    
</div>
</div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="all_service">
  <div class="container">
    <div class="row">
    
    
    <div class="service_section">
    <div class="service_img">
    <img src="{{ asset('public/img/service_1.png') }}" class="img-fluid">
    </div> 
   
    <div class="cnt_left ml-36">
    <h2>Check up during cleaning</h2>
    <p>After all this time at home, now it is time to get back to normal life. Normal obviously includes travelling again. Whether it’s a weekend getaway to Miami Beach or a business trip to New York you will soon find yourself once again booking your hotel room. With that comes a heavy dose of worry.</p>
    <p>The Coronavirus has swept through our world and made us all refocus on safety and cleanliness. We are all apprehensive and fearful at the thought of exposure to the virus when we stay at places outside of our own homes.</p>
    </div> 
    
    </div> <!--service_section-->  
    
    
  <div class="service_section" id="main">
    
    <div class="cnt_left" id="first">
    <h2>Check up during disinfecting</h2>
    <p>After all this time at home, now it is time to get back to normal life. Normal obviously includes travelling again. Whether it’s a weekend getaway to Miami Beach or a business trip to New York you will soon find yourself once again booking your hotel room. With that comes a heavy dose of worry.
</p>
    <p>The Coronavirus has swept through our world and made us all refocus on safety and cleanliness. We are all apprehensive and fearful at the thought of exposure to the virus when we stay at places outside of our own homes.</p>
    </div>
    
    <div class="service_img ml-36" id="second">
    <img src="{{ asset('public/img/service_2.png') }}" class="img-fluid">
    </div>  
    
    </div> <!--service_section-->      
    
     <div class="service_section">
    <div class="service_img" >
    <img src="{{ asset('public/img/service_3.png') }}" class="img-fluid">
    </div> 
   
    <div class="cnt_left ml-36" >
    <h2>Pictures & confirmation sent 
via email</h2>
    <p>After all this time at home, now it is time to get back to normal life. Normal obviously includes travelling again. Whether it’s a weekend getaway to Miami Beach or a business trip to New York you will soon find yourself once again booking your hotel room. With that comes a heavy dose of worry.</p>
    <p>The Coronavirus has swept through our world and made us all refocus on safety and cleanliness. We are all apprehensive and fearful at the thought of exposure to the virus when we stay at places outside of our own homes.</p>
    </div> 
    
    </div> <!--service_section-->  
    
    
  <div class="service_section" id="main">
    
    <div class="cnt_left "  id="first">
    <h2>Swab results via email</h2>
    <p>After all this time at home, now it is time to get back to normal life. Normal obviously includes travelling again. Whether it’s a weekend getaway to Miami Beach or a business trip to New York you will soon find yourself once again booking your hotel room. With that comes a heavy dose of worry.
</p>
    <p>The Coronavirus has swept through our world and made us all refocus on safety and cleanliness. We are all apprehensive and fearful at the thought of exposure to the virus when we stay at places outside of our own homes.</p>
    </div>
    
    <div class="service_img ml-36" id="second">
    <img src="{{ asset('public/img/service_4.png') }}" class="img-fluid">
    </div>  
    
    </div> <!--service_section-->      
    
    
    
    
     
  
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