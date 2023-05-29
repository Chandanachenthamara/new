@extends('frontend.layouts.frontend_master')

@section('content')

</section>

<section class="faq_banner">
  <div class="container-fluid">
    <div class="row"> <div class="faq_banner_cnt">
   <h5></h5>
      <h3>Register</h3>
   
  </div>     </div>
  </div>
</section>

{{-- <section>
  
 

</section --}}


 <section >
                    
                       

                          <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-center">

                            </div>
                            <br>
                 <div class="col-lg-6 " >           
              @if (session('success'))
            <div class="alert alert-success" id="alert">
                {{ session('success') }}
            </div>
        @endif 
      </div>


      <div class="col-lg-7 mx-auto " style="padding: 5%;">
     <h2 class="common_title"></h2>
     <form class="common_form" method="get" action="{{ route('customer.store') }}">
@csrf

<div class="row" style="font-size:15px; font-weight: bold;">
                    <div class="form-group col-md-6" >
                       <label class="form-label" >First Name:</label>
        <input class="form-control auth-input" id="fname" type="text" name="fname" value="" required="">
                    </div>
                    <div class="form-group col-md-6">
                         <label class="form-label">Last Name:</label>
        <input class="form-control auth-input" id="lname" type="text" name="lname" value="" name="lname" required="">
                    </div>
                </div>


<div class="row" style="font-size:15px; font-weight: bold;">
                    <div class="form-group col-md-6">
                       <label class="form-label">Address:</label>
        <input class="form-control auth-input" id="address" type="text" name="address" value="" required="">
                    </div>
                    <div class="form-group col-md-6">
                         <label class="form-label">Email:</label>
        <input class="form-control auth-input" id="email" type="email" name="email" value=""  pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" required="">
                    </div>
                </div>
                <div class="row" style="font-size:15px; font-weight: bold;"s>
                    <div class="form-group col-md-6">
                       <label class="form-label">Phone:</label>
        <input class="form-control auth-input" id="phone" type="text" name="phone" value="" required="">
                    </div>
                    <div class="form-group col-md-6">
                         <label class="form-label">User Name:</label>
        <input class="form-control auth-input" id="username" type="text" name="username" value=""  required="">
                    </div>
                </div>

                <div class="row" style="font-size:15px; font-weight: bold;">
                    <div class="form-group col-md-6">
                       <label class="form-label">Password:</label>
        <input class="form-control auth-input" id="password" type="text" name="password" value="" required="">
                    </div>
                    <div class="form-group col-md-6">
                         <label class="form-label">Re-type Password:</label>
        <input class="form-control auth-input" id="repassword" type="password" name="rename" value=""  required="">
                    </div>
                </div>

<br>
            {{--     <div class="row"> --}}
                    <div class="form-group col-md-6">
                        <input type=hidden name=submit value="submit">
                        
                      <button type="submit" id="submit" class="button">Submit</button>
                    </div>
               {{--  </div> --}}



<br>
     
      
    
    </form>

    </div> 
  </section> 

                      <section class="abt_p_box">
                        <div class="container">
                          <div class="row">




    </div>
                          </div>
                        </div>
                        </section>


                    
<style>
  .inputdesign input
  {
    padding: 10px 10px;
    border-radius: 0px;
    color: #ff0000;
  }
</style>


@endsection
@section('script')
<script>    $(document).on("scroll", function(){
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
<style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  margin-left: 5%;

  border-radius: 8px;
}
</style>

@endsection