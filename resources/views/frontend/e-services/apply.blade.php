@extends('frontend.layouts.master')

@section('title', __('Recruitment'))

@section('content')

  <!--start-jobs -->
    <section class="component-Contribute  pt-5 pb-5">
        <div class="container">
            <div class="text-center">
                <strong class=" m-auto  text-initiatives-head title-login">
                    @lang('Apply for the job')
                </strong>
            </div>
            <div class="col-md-10 m-auto p-5 mt-5 component-modify">
                <div class="col-md-9 m-auto">
                    <div class="mt-2 d-flex justify-content-between">
                        <div>
                            <h6 class="title-jop">(@lang('Job'))</h6>
                            <h5 class="title-jop-defintion">{{ $job->job }} </h5>
                        </div>
                       <div class="img-close">
                           <a href="{{ route('frontend.e-services.recruitment') }}"><img src="/assets/img/close.png" alt="close"></a>
                       </div>
                    </div>
                    <div class="col-md-10 mt-4">
                        <h6  class="title-jop">(@lang('Information'))</h6>
                        <pre class="pre-jobs mt-3">
                            {{ $job->description }}
                        </pre>
                    </div>

                    <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="" id="job-request-form" action="{{ route('frontend.job.request.store', $job) }}" method="POST">
                        @csrf
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control form-control-lg request-form" name="name" placeholder=" @lang('Name') " id="validationemail" required="">
                            <div class="invalid-feedback">
                            Please provide a valid name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="number" placeholder="@lang('Phone')" name="phone" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="number" placeholder="@lang('Age')" name="age" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="number" placeholder="@lang('Identification Number')" name="identification_number" class="form-control form-control-lg request-form" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" placeholder="@lang('Specialization')" name="specialization" class="form-control form-control-lg request-form" id="validationCustom05" required="">
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

                        <div class ="col-md-12 mb-2">
                            <div class="d-flex form-control custom-file justify-content-between">
                                <span>@lang('CV')</span>
                                <div class="">
                                    <input type="file" class="custom-file-input" id="file" name="file" accept=".pdf,docx,doc" required>
                                    <label class="text-white custom-file-label" for="file">
                                        @lang('Upload file')
                                        <img class="download" src="/assets/img/Icon awesome-download.png" alt="download">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end-request-->

@endsection

@push('after-scripts')
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

  <script type="text/javascript">

  $(document).on('submit', '#job-request-form',function(e) {
          e.preventDefault();

          var url = $(this).attr('action'),
              formData = new FormData($('#job-request-form')[0]);

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
                    $('#job-request-form .request-form .custom-file-input').val('');
                    $('#job-request-form').removeClass('was-validated');

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
