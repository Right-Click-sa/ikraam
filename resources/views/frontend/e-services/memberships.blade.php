@extends('frontend.layouts.master')

@section('title', __('Memberships'))

@section('content')

  <!--start-memberships-->
    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <h6 class="text-center title-login">
                    @lang('Membership request')
                  </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="" id="membership-request-form" action="{{ route('frontend.membership.request.store') }}" method="POST">
                      @csrf

                    <div class="col-md-6 mb-2">
                      <input type="text" class="form-control form-control-lg request-form" name="name" placeholder=" @lang('Name') " id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="number" placeholder="@lang('Identification Number')" name="identification_number" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid number.
                        </div>
                      </div>
                    <div class="col-md-6 mb-2">
                      <input type="number" placeholder="@lang('Phone')" name="phone" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <select name="gender_id" class="form-select request-form" aria-label="Default select example" required>
                            <option value="">@lang('Gender')</option>
                            @foreach ($genders as $key => $gender)
                              <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" placeholder=" @lang('City')" name="city" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                    <div class="col-md-6 mb-2">
                        <select name="membership_id" class="form-select request-form" aria-label="Default select example" required>
                            <option value="">@lang('Desired Membership Type')</option>
                            @foreach ($types as $key => $type)
                              <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                    </div>
                </form>
              </div>

          </div>

        </div>
    </section>
    <!--end-memberships-->

@endsection

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

  <script type="text/javascript">

  $(document).on('submit', '#membership-request-form',function(e) {
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
                  $('#membership-request-form .request-form').val('');
                  $('#membership-request-form').removeClass('was-validated');

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
