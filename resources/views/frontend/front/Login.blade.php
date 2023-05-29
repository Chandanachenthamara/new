@extends('frontend.layouts.frontend_master')

@section('content')
<!--============head_top============-->


</section>

<section class="contact_banner">
  <div class="container-fluid">
    <div class="row"> <div class="contact_banner_cnt">
   <h5>Complete your booking</h5>
      <h3>Contact</h3>
      <p>Great! Just a few more details and we can complete your booking!</p>
  </div>     </div>
  </div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="contact">
  <div class="container">
    <div class="row">
       <div class="bookform_div">
         <form class="cnt_frm" action="{{ route('contactlist') }}" method="post">
           @csrf
 
          <div class="title_div">
          <h5>Get in Touch</h5>
          </div>

           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name" required>
                            <span class="text-danger" id="nameErrorMsg"></span>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            <em id="emailxerror" class="invalid-feedback"></em>


                            <span class="text-danger" id="emailErrorMsg"></span>
              </div>
       </div>
      
       
           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <input type="number" class="form-control" id="phoneno" aria-describedby="emailHelp" name="phoneno" value="{{ old('phoneno') }}"placeholder="Customer Phone number" required>
                            <span class="text-danger" id="mobileErrorMsg"></span>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="text" class="form-control" id="hotel" aria-describedby="emailHelp" name="hotel" value="{{ old('hotel') }}" placeholder="Hotel Name" required>
                            <span class="text-danger" id="hotelErrorMsg"></span>
              </div>
       </div>
      
        
           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <select class="form-control minimal" id="state" name="state" value="{{ old('state') }}"><span class="text-danger" id="stateErrorMsg"></span>
                                                <option class="hidden"  selected > State</option>
                                                <option>state1</option>
                                                <option>state2</option>
                                                <option>state3</option>
                                            </select>
              </div>
              </div>
              <div class="input_field_bknw ">
       <div class="form-group">
             
                            <select class="form-control minimal" id="city" name="city" value="{{ old('city') }}"><span class="text-danger" id="cityErrorMsg"></span>
                                                <option class="hidden"  selected disabled>City</option>
                                                <option>City1</option>
                                                <option>City2</option>
                                                <option>City3</option>
                                            </select>
              </div>
       </div>
      
      
           <div class="input_field_bknw mr-18 ">
       <div class="form-group">
               
                            <input type="text" class="form-control" id="zip" aria-describedby="emailHelp" name="zip" value="{{ old('zip') }}" placeholder="Zip" required><span class="text-danger" id="zipErrorMsg"></span>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="text" class="form-control" id="bookno" aria-describedby="emailHelp" name="bookno" value="{{ old('bookno') }}" placeholder=" Booking Reference number" required><span class="text-danger" id="referenceErrorMsg"></span>
              </div>
       </div>
       
           <div class="txtarea_bknw ">
       <div class="form-group">
               
                            <textarea class="form-control" id="message" rows="" name="comments" value="{{ old('comments') }}" placeholder="Comments" required></textarea><span class="text-danger" id="commentsErrorMsg"></span>
              </div>
              </div>
    
       
        
          
       <div class="form-group">
       
       <button class="btn cnt_audit" type="submit">Book Audit</button>
       </div>
             
              
 
       
       </form>
       </div>
       
     
           <div class="map_box">
                <!--<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<img src="{{ asset('public/img/map.png') }}" class="img-fluid ">

 <div class="adrs_box">
 <h4>SAIPH</h4>
 <p>30 Meadow StreetIthaca, NY 14850, 2736 6454 747</p>
</div>
</div>
       </div>
    </div>
  
</section>
@endsection
<!--============our_services_ends============-->

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">

// $('#SubmitForm').on('submit',function(e){
//     e.preventDefault();

//     let name = $('#name').val();
//     let email = $('#email').val();
//     let mobile = $('#phoneno').val();
//     let hotel = $('#hotel').val();
//     let state = $('#state').val();
//     let city = $('#city').val();
//     let zip = $('#zip').val();
//     let book = $('#bookno');
//     let comments = $('#message');
//     $.ajax({
//       url: "{{ route('contactlist') }}",

//       type:"POST",
//       data:{
//         "_token": "{{ csrf_token() }}",
//         name:name,
//         email:email,
//         mobile:mobile,
//         hotel:hotel,
//         state:state,
//         city:city,
//         zip:zip,
//         book:book,
//         comments:comments,
//       },
//       success:function(response){
//         $('#successMsg').show();
//         console.log(response);
//       },
//       error: function(response) {
//         $('#nameErrorMsg').text(response.responseJSON.errors.name);
//         $('#emailErrorMsg').text(response.responseJSON.errors.email);
//         $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
//         $('#hotelErrorMsg').text(response.responseJSON.errors.message);
//         $('#stateErrorMsg').text(response.responseJSON.errors.message);
//         $('#cityErrorMsg').text(response.responseJSON.errors.message);
//         $('#zipErrorMsg').text(response.responseJSON.errors.message);
//         $('#referenceErrorMsg').text(response.responseJSON.errors.message);
//         $('#commentsErrorMsg').text(response.responseJSON.errors.message);
//       },
//       });
//     });
  </script>
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
 
	$(document).ready(function() {
        $('#email').on('keyup', function(){ 
            $('#email').filter(function(){
                var email = $(this).val();
                var emailReg = /^[\w.-]+[+]?[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/;
                if ( !emailReg.test( email ) ) {
                    $('#email').addClass('is-invalid');
                    $('#emailxerror').text('required a valid email');
                    } else {
 $('#email').removeClass('is-invalid');
}
 }); 
});
});

	</script>
	@endsection