@extends('frontend.layouts.frontend_master')

@section('content')
<!--============head_top============-->


</section>

<section class="hotel_banner">
  <div class="container-fluid">
    <div class="row"> <div class="htl_banner_cnt">
   <h5>Questions & Answers</h5>
      <h3>Hotels</h3>
   <p>Great! Just a few more details and we can complete your booking!</p>
  </div>     </div>
  </div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="hotel">
  <div class="container">
  <div class="row">   
  <div class="hotel_logo_main">    
   @foreach($hotel as $key => $eachhotel)
   <div class="hotel_logo_left-effect">   
    <img src="{{ asset('storage/app/public/images/'.$eachhotel->image) }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>{{ $eachhotel->name }}</h3>
<div class="logo-line"></div>
<p>{{ $eachhotel->address }}</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
@endforeach
{{-- <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/lg.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Lam Group</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/hsh.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Homewood Suites Hotel</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->     
    
  <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/pch.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Park Central Hotel</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->
   
   
   
   
   
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/riu.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>RIU</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 

 <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/edition.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Edition</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/trivago.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Trivago</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->     
    
  <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/ihcl.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>IHCL</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->   
   
   
   
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/plaza.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>The Plaza</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 

 <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/thesurrey.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>The Surrey</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/bel.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Trivago</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->     
    
  <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/noble.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>IHCL</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->  
   
   
   
   
       <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/aim.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>The Plaza</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 

 <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/stanly.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>The Stanly</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
   
    <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/hudson.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Hudson</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect-->     
    
  <div class="hotel_logo_left-effect">   
    <img src="{{ asset('public/img/royal.png') }}" class="img-fluid">
    <div class="hotel-overlay">
<h3>Royalton</h3>
<div class="logo-line"></div>
<p>New York Downtown, 55 Church St, NY 
10007, United States</p>
</div>
    
   </div><!--hotel_logo left-effect--> 
   
   
   --}}
   
   
   
      
   
   
       
    
    
    
  </div><!--hotel_logo_main-->  
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
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
@endsection