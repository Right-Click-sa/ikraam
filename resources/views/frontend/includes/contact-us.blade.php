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
   </div>
</section>
