@extends('frontend.layouts.master')

@section('title', __('Contact Us'))

@section('content')

  <!--start-contact-us-->
  <section class="component-content-us pt-5 pb-5">
     <div class="container">
         <div class="row">
           <div class="col-md-5 justify-content-center definten-content-us">
               <h4 class="text-center">
                   <span>@lang('Contact Us')</span>
               </h4>
               <div class="row">
                   <!---->
                  <div class="contact-method col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-end">
                      <a class="block-reset" href="mailto:{{ $settings['email'] }}" target="_newEmail">{{ $settings['email'] }}</a>
                      <i class="btn btn-sm me-3 fas fa-envelope"></i>

                  </div>
                  <!----->
                  <div class="contact-method col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-end">
                      <a href="tel:{{ $settings['phone'] }}" class="block-reset">{{ $settings['phone'] }}
                      </a>
                      <i class="btn btn-sm  me-3 fa-solid fa-phone"></i>

                  </div>

              </div>

              <form class="form-content row g-3 needs-validation justify-content-center" novalidate="" id="contact-us-form" action="{{ route('frontend.contact-us.store') }}" method="POST">
                  @csrf

                  <div class="col-md-10">
                    <input type="text" class="form-control form-control-lg" name="name" id="validationCustom01" placeholder="@lang('Name')" maxlength="60" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-10">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder=" @lang('Email') " id="validationemail" maxlength="70" required="">
                    <div class="invalid-feedback">
                      Please provide a valid Email.
                    </div>
                  </div>

                  <div class="col-md-10">
                    <div class="input-group">
                        <span class="input-group-text" id="">966</span>
                        <input type="number" placeholder="@lang('Phone')" class="form-control form-control-lg" name="phone" id="validationCustom05" maxlength="9"  onKeyPress="if(this.value.length===9) return false;" required="">
                    </div>

                    <div class="invalid-feedback">
                      Please provide a valid number.
                    </div>
                  </div>

                  <div class="col-md-10">
                     <textarea rows="3" placeholder="@lang('Your message')" class="form-control form-control-lg" name="message" id="validationTextarea" maxlength="500" required=""></textarea>
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

                 <h2 class="">{{ $settings['address'.ucfirst(app()->getLocale())] }}</h2>
             </div>

             <iframe class="mt-4"src="{{ $settings['map'] }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!--maps-->
     </div>
  </section>

  <!--end-contact-us-->

@endsection

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

  <script type="text/javascript">

  $(document).on('submit', '#contact-us-form',function(e) {
          e.preventDefault();

          var url = $(this).attr('action'),
              formData = $(this).serialize();

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url : url,
              type: 'POST',  // http method
              data: formData,  // data to submit
              success: function (data, status, xhr) {
                  $('#contact-us-form .form-control').val('');
                  $('#contact-us-form').removeClass('was-validated');

                  if(data.errors) {
                      Swal.fire({
                        title: data.app_name,
                        text: data.errors,
                        icon: 'error',
                        timer: 3000,
                        timerProgressBar: true,
                        showClass: {
                          popup: 'animate__animated animate__fadeInDown',
                          backdrop: 'swal2-backdrop-show',
                          icon: 'swal2-icon-show'
                        },
                        hideClass: {
                          popup: 'animate__animated animate__fadeOutUp',
                          backdrop: 'swal2-backdrop-show',
                          icon: 'swal2-icon-show'
                        }
                      })
                  }
                  else {
                    Swal.fire({
                      title: data.app_name,
                      text: data.success,
                      icon: 'success',
                      timer: 3000,
                      timerProgressBar: true,
                      showClass: {
                        popup: 'animate__animated animate__fadeInDown',
                        backdrop: 'swal2-backdrop-show',
                        icon: 'swal2-icon-show'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp',
                        backdrop: 'swal2-backdrop-show',
                        icon: 'swal2-icon-show'
                      }
                    });
                  }
              },
              error: function (jqXhr, textStatus, errorMessage) {
                  // console.log(errorMessage);
                  // console.log(jqXhr);
              }
          });
      });
  </script>
@endpush
