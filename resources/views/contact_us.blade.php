@extends('layouts.frontend_default')
@section('title', 'Contact Us')
@section('content')
<style type="text/css">
   .error,
   .error-msg {
      color: red;
   }

   .success-msg {
      color: green;
   }
   .alert-success2{
      background-image: linear-gradient(55deg, var(--cretech-secondary, #9c2ede) 0%, var(--cretech-primary, #6a2dec) 100%);
      color: #fff;
   }
   .alert-warning2{
      background-image: linear-gradient(55deg, var(--cretech-secondary, #7a2dec) 0%, var(--cretech-primary, #9c2ede) 100%);
      color: #fff;
   }
</style>
<div class="page-header">
   <div class="page-header__bg"
      style="background-image: url({{asset('frontend/assets/images/background/header.jpg')}});"></div>
   <!-- /.page-header__bg -->
   <div class="container">
      <ul class="thm-breadcrumb list-unstyled">
         <li><a href="index.html">Home</a></li>
         <li>Contact</li>
      </ul>
      <h2 class="page-header__title">Contact</h2>
      <!-- /.page-header__title -->
   </div>
   <!-- /.container -->
</div>


<section class="contact-one section-padding--top section-padding--bottom">
   <div class="container">      
      <div class="row">         
         <div class="col-lg-8 col-md-12">
            <div class="formdiv">               
               <form action="{{route('contact-us-save')}}" class="contact-one__form contact-form"
                  novalidate="novalidate" method="POST">
                  <div class="row">
                     <div class="col-lg-12">
                         @if(session('success'))
                         <div class="alert alert-success2 alert-dismissible fade show" role="alert" style="position: relative;">
                             <strong>Success!</strong> {{ session('success') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: transparent; position: absolute; top:5px;right:5px; border:none;">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         @endif
                     </div>
                 
                     <div class="col-lg-12">
                         @if(session('error'))
                         <div class="alert alert-warning2 alert-dismissible fade show" role="alert" style="position: relative;">
                             <strong>Error!</strong> {{ session('error') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: transparent; position: absolute; top:5px;right:5px; border:none;">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         @endif
                     </div>
                 </div>
                 
                  @csrf
                  <div class="section-title">
                     <p class="section-title__text">Contact with us</p>
                     <!-- /.section-title__text -->
                     <h2 class="section-title__title">Join Us To Get IT Free
                        Consultations
                     </h2>
                     <!-- /.section-title__title -->
                  </div>
                  <!-- /.section-title -->
                  <div class="row ">
                     <div class="col-lg-6 col-md-12">
                        <input type="text" placeholder="Your name" name="name">
                        @error('name')
                     <label style="color:red" class="error">{{ $message }}</label>
                  @enderror
                     </div>
                     <!-- /.col-lg-6 col-md-12 -->
                     <div class="col-lg-6 col-md-12">
                        <input type="email" placeholder="Email address" name="email">
                        @error('email')
                     <label style="color:red" class="error">{{ $message }}</label>
                  @enderror
                     </div>

                     <div class="col-lg-12 col-md-12">
                        <input type="text" placeholder="Subject" name="subject">
                        @error('subject')
                     <label style="color:red" class="error">{{ $message }}</label>
                  @enderror
                     </div>
                     <!-- /.col-lg-6 col-md-12 -->
                     <div class="col-lg-12 col-md-12">
                        <textarea name="message" placeholder="Write message"></textarea>
                        @error('message')
                     <label style="color:red" class="error">{{ $message }}</label>
                  @enderror
                     </div>
                     <!-- /.col-lg-6 col-md-12 -->
                     <div class="col-md-12">
                        <button class="thm-btn contact-one__btn" type="submit">
                           <span>send a message</span>
                        </button>
                     </div>
                     <!-- /.col-md-12 -->
                  </div>
                  <p class="success-msg"></p>
                  <p class="error-msg"></p>
                  <!-- /.row -->
               </form>
            </div>
            <!-- /.contact-one__form -->
            <!-- <div class="result"></div> -->
            <!-- / -->
         </div>
         <!-- /.col-lg-8 -->
         <div class="col-lg-4 col-md-4">
            @if(isset($setting) && !empty($setting))
            <div class="contact-one__info wow fadeInRight animated" data-wow-duration="1500ms"
               style="background-image: url(&quot;assets/images/background/contact-one-bg-1-1.png&quot;); visibility: visible; animation-duration: 1500ms; animation-name: fadeInRight;">
               <div class="contact-one__item">
                 <h3 class="contact-one__item__title">Address</h3>
                 <!-- /.contact-one__item__title -->
                 <p class="contact-one__item__text">{{$setting->address}}</p>
                 <!-- /.contact-one__item__text -->
               </div><br><br>
               <!-- /.contact-one__item -->
               <div class="contact-one__item">
                 <h3 class="contact-one__item__title">Phone</h3>
                 <!-- /.contact-one__item__title -->
                 <p class="contact-one__item__text">
                   Mobile: <a href="tel:+91{{$setting->mobile}}">+91 {{$setting->mobile}}</a>
                 </p>
                 <!-- /.contact-one__item__text -->
               </div><br><br>
               <!-- /.contact-one__item -->
               <div class="contact-one__item">
                 <h3 class="contact-one__item__title">Email</h3>
                 <!-- /.contact-one__item__title -->
                 <p class="contact-one__item__text"><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                 <!-- /.contact-one__item__text -->
               </div><br><br>
               <!-- /.contact-one__item -->
               <div class="contact-one__item">
                 <ul class="contact-one__social">
                   <li><a href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="{{$setting->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                   <li><a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                 </ul>
                 <!-- /.contact-one__social -->
               </div>
               <!-- /.contact-one__item -->
            </div>
            <!-- /.contact-one__info -->
         @endif
         </div>
         <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<section class="google-map google-map--contact">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.6561554438804!2d77.08790727529286!3d28.729820175611778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d07df4ef6f995%3A0x2e259d6fde30a42a!2sCore%20Tech%20Info!5e0!3m2!1sen!2sin!4v1722675082711!5m2!1sen!2sin" class="google-map__one" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection


@section('js_script')
<script type="text/javascript">
   if ($(".contact-form").length) {
      $(".contact-form").validate({
         // initialize the plugin
         rules: {
            name: {
               required: true
            },
            email: {
               required: true,
               email: true
            },
            message: {
               required: true
            },
            subject: {
               required: true
            }
         }
         // submitHandler: function (form) {
         //    // sending value with ajax request
         //    $('.preloader').show();
         //    $.post(
         //       $(form).attr("action"),
         //       $(form).serialize(),
         //       function (response) {
         //          $('.preloader').hide();
         //          var res = JSON.parse(response);
         //          if (res.status) {
         //             // $(form).parent().find(".result").append(response);
         //             $('.success-msg').text();
         //             $('.success-msg').append(res.message);
         //             $(form).find('input[type="text"]').val("");
         //             $(form).find('input[type="email"]').val("");
         //             $(form).find('input[name="subject"]').val("");
         //             $(form).find("textarea").val("");
         //          } else {
         //             $('.error-msg').text();
         //             $('.error-msg').append(res.message);
         //          }
         //       }
         //    );
         //    return false;
         // }
      });
   }
</script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function(){
        $(".close").click(function(){
            $(this).parent().fadeOut(500); // Fade out in 500ms
        });
    });
</script>

@endsection