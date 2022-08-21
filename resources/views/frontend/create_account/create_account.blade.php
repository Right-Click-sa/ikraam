@extends('frontend.layouts.master')

@section('title', __('Register'))

@section('content')

  <!--start-register-->
    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <h6 class="text-center title-login">
                    @lang('Register')
                     <img src="/assets/img/login.png" alt="login">
                    </h6>

                  <form class="form-content form-login mt-3 row-cols-lg-3 row-cols-md-2 row-cols-1 row g-4 needs-validation justify-content-center" novalidate="" id="create-account-form" action="{{ route('frontend.association.request.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                    <div class="col">
                      <input type="text" class="form-control form-control-lg" name="name" placeholder="@lang('Association name')" id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>
                    <div class="col">
                      <input type="number" placeholder="@lang('Association number')" name="number" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Chairman of the Board')" name="chairman" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Chairman of the Board.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Founding of the Association')" name="founding" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Founding of the Association.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Association license')" name="license" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Association license.
                        </div>
                    </div>
                     <div class="col">
                        <input type="text" placeholder="@lang('Executive Director')" name="executive_director" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Executive Director.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Association Location')" name="location" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Association Location.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('The main objectives of the association (scope of work)')" name="objective" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Main objective.
                        </div>
                    </div>
                    <div class="col">
                        <input type="email" placeholder="@lang('The association\'s email')" name="email" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid association's e-mail
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder=" @lang('City')" name="city" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid city
                          .
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Administrative officer')" name="administrative_officer" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Administrator.
                        </div>
                    </div>
                    <div class="col">
                        <input type="number" placeholder=" @lang('Administrative officer\'s number')" name="administrative_officer_number" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid number Administrator.
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex form-control custom-file justify-content-between">
                            <span>@lang('Upload the association certificate')</span>
                            <div class="">
                                <label class="custom-file-label text-white" for="file">
                                    @lang('Upload file')
                                    <input type="file" name="file" class="custom-file-input form-file" id="file" onchange="javascript:updateList()" accept=".pdf,docx,doc" required>
                                    <img class="download"src="/assets/img/Icon awesome-download.png" alt="download">
                                </label>
                            </div>
                        </div>
                        <ul id="fileList" class="file-list"></ul>

                    </div>

                    <div class="col text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Register')</button>
                    </div>

                </form>

                <div class="content-Privacy mt-5">
                    @lang('By registering for an account or using this website, you agree to our')
                     <a href="#" class="color-copy"> @lang('Terms of use')</a>
                     @lang('and')
                      <a href="#" class="color-copy">  @lang('privacy policy') </a>
                      @langrtl @lang('ours') @endlangrtl
                </div>
              </div>

          </div>

        </div>
    </section>
    <!--end-register-->

@endsection

@push('after-scripts')
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

  <script type="text/javascript">

  $(document).on('submit', '#create-account-form',function(e) {
          e.preventDefault();

          var url = $(this).attr('action'),
              formData = new FormData($('#create-account-form')[0]);

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url : url,
              type: 'POST',  // http method
              data: formData,  // data to submit
              processData: false,
              contentType: false,
              success: function (data, status, xhr) {

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
                    $('#create-account-form').removeClass('was-validated');
                    $('#create-account-form .form-control .form-file').val('');

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
