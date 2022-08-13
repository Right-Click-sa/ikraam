@extends('frontend.layouts.master')

@section('title', __('Contact Us'))

@section('content')

  <!--start-contact-us-->
  <section class="component-content-us pt-5 pb-5">
     <div class="container">
         <div class="row">
           <div class="col-md-5 justify-content-center definten-content-us">
               {{-- <h6 class="text-center">@lang('Call Us')</h6> --}}
               <h4 class="text-center">
                   <span>@lang('Contact Us')</span>
               </h4>
               <div class="row">
                   <!---->
                  <div class="contact-method col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-end">
                      <a class="block-reset" href="mailto:info@ikraam.org.sa" target="_newEmail">info@ikraam.org.sa</a>
                      <i class="btn btn-sm me-3 fas fa-envelope"></i>

                  </div>
                  <!----->
                  <div class="contact-method col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-end">
                      <a href="tel:+966534399110" class="block-reset">+966534399110
                      </a>
                      <i class="btn btn-sm  me-3 fa-solid fa-phone"></i>

                  </div>

              </div>
              <form class="form-content row g-3 needs-validation justify-content-center" novalidate="">
                  <div class="col-md-10">
                    <input type="text" class="form-control form-control-lg" id="validationCustom01" placeholder="@lang('Name')" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-10">
                    <input type="email" class="form-control form-control-lg" placeholder=" @lang('Email') " id="validationemail" required="">
                    <div class="invalid-feedback">
                      Please provide a valid Email.
                    </div>
                  </div>

                  <div class="col-md-10">
                    <input type="text" placeholder="@lang('Phone')" class="form-control form-control-lg" id="validationCustom05" required="">
                    <div class="invalid-feedback">
                      Please provide a valid number.
                    </div>
                  </div>
                  <div class="col-md-10">
                     <textarea rows="3" placeholder="@lang('Your message')" class="form-control form-control-lg" id="validationTextarea" required=""></textarea>
                     <div class="invalid-feedback">
                      Please enter a message in the textarea.
                  </div>

                  </div>
                  <div class="col-md-10 text-center">
                    <button class="btn btn-lg col-md-4  btn-submit" type="submit">@lang('Send')</button>
                  </div>
              </form>
           </div>
           <div class="col-md-7 img-content">
               <img src="/assets/img/content-us.png" alt="content-us">
           </div>

         </div>

         <!--maps-->
          <div class="component-maps mt-5">
             <div class="div-group  mb-3">
                 <span class="" id="basic-addon2"><i class="fa-solid fa-location-dot"></i></span>

                 <h2 class="">RM47+X3V، الياسمين،، الرياض المملكة العربية السعودية</h2>
             </div>

             <iframe class="mt-4"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.495287330034!2d46.670223185683874!3d24.675495258724407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1cad80c0f04b%3A0x1dc565fe39132323!2z2LLYp9mB2LHYp9mG!5e0!3m2!1sar!2seg!4v1653998937029!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!--maps-->
     </div>
  </section>

  <!--end-contact-us-->

@endsection
