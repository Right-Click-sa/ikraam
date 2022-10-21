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
                    <a class="block-reset" href="mailto:{{ $settings['email'] }}" target="_newEmail"> {{ $settings['email'] }} </a>
                    <i class="btn btn-sm me-3 fas fa-envelope"></i>
                </div>
                <!----->
                <div class="contact-method col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-end">
                    <a href="tel:{{ $settings['phone'] }}" class="block-reset"> {{ $settings['phone'] }} </a>
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

                  <input type="number"  id="phone"  name="phone"  maxlength="12"  onKeyPress="if(this.value.length===12) return false;"  class="form-control form-control-lg" required="true" title="you can give score -10 to +10 only" onkeyup="process(event)">
                  <div class="alert alert-info" style="display: none;"></div>

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
   </div>
</section>

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

  <script>
      var input = document.querySelector("#phone");
      const info = document.querySelector(".alert-info");

      /*loction*/
      const phoneInput = window.intlTelInput(input, {
          initialCountry: "auto",
           separateDialCode: true,
           preferredCountries:["in"],
           hiddenInput: "full",
           utilsScript: "/assets/js/utils.js",
         geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "us";
              success(countryCode);
            });
          },

        });

      function process(event) {
        event.preventDefault();

        const phoneNumber = phoneInput.getNumber();

        info.style.display = "none";
           info.style.display = "";
           info.innerHTML = "@lang('Phone number should start with: ')" + `<strong>` + $('.iti__selected-dial-code').text() + `</strong>`;

      }
      /**/

  </script>

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
