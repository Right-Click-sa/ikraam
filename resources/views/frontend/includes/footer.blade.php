<!--footer-->
<footer class="component-footer pt-3">
    <div class="container">
        <div class="row  justify-content-between align-items-center mx-0">
            <div class="col-lg-6 d-lg-flex align-items-center">
                <!--logo-footer-->
                <div class="text-center">
                    <img class="logo-footer"src="/assets/img/logo.png" alt="logo">
                </div>
                <!--social-->
                <div class="social">
                    <span class="text-white fs-6">@lang('Follow us')</span>
                    <a href="{{ $settings['facebook'] }}" class="text-white fs-6  fab fa-facebook" target="_blank" ></a>
                    <a href="{{ $settings['instagram'] }}" class="text-white fs-6  fab fa-instagram" target="_blank" ></a>
                    <a href="{{ $settings['linkedin'] }}" class="text-white fs-6 fab fa-linkedin" target="_blank" ></a>
                    <a href="{{ $settings['tiktok'] }}" class="text-white fs-6 fab fa-tiktok" target="_blank"></a>
                    <a href="{{ $settings['twitter'] }}" class="text-white fs-6 fab fa-twitter" target="_blank" ></a>
                </div>
                <!--social-->
            </div>
              <div class="col text-start linke-footer-left">
                  <a class="mx-sm-3 mx-2 text-white" href="{{ route('frontend.contribute.volunteer') }}" >@lang('Contribute with us')</a>
                  <a class="mx-sm-3 mx-2 text-white" href="{{ route('frontend.questions') }}" >@lang('Common Questions')</a>
                  <a class="mx-sm-3 mx-2 text-white" href="{{ route('frontend.e-services.recruitment') }}" >@lang('Recruitment')</a>
              </div>
          </div>
        </div>
        <!-- Copyrights -->
          <div class="copyrights text-center pt-3 pb-3 text-white fs-5 text-capitalize">
              @lang('All rights reserved to the National Honoring the Dead Foundation')
              <strong>
                  &copy; {{ date('Y') }}
              </strong>
          </div>
        <!--end-Copyrights-->
</footer>
<!--end-footer-->
