<!--stärt-nav-top-->
<div class="nav-top">
   <div class="container">
       <div class="row-nav-top row justify-content-between">
           <div class="col-lg  d-flex align-items-center link-nav-top">

               @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 0)
                  @foreach(collect(config('boilerplate.locale.languages'))->sortBy('name') as $code => $details)
                      @if($code !== app()->getLocale())
                        <a class="text-white text-capitalize" href="{{ route('locale.change', $code) }}" role="button" title="اللغه">
                          {{__(getLocaleName($code))}}
                          <i class="fa-solid fa-globe"></i>
                        </a>
                      @endif
                  @endforeach
               @endif

               <a href="#" class="button-search text-white"  id="show" type="button"  title="البحث">
                   <i class="fa-solid fa-magnifying-glass"></i>
               </a>
               <form class="form-index"style="display: none;">
                   <div class="input-group">
                       <input type="search" class="form-control">
                       <button class="btn button-serch-form" type="button">
                           <i class="fa-solid fa-magnifying-glass"></i>
                       </button>
                   </div>
               </form>
           </div>

           <h6 class="col-lg-2 col-10 d-flex title-page-left">@lang('Trial launch')</h6>

           <div class="col-lg col-Social-Media d-flex justify-content-end align-items-center">
             <a href="{{ $settings['instagram'] }}" class="text-white fs-6  fab fa-instagram" target="_blank" ></a>
             <a href="{{ $settings['twitter'] }}" class="text-white fs-6 fab fa-twitter" target="_blank"></a>
             <a href="https://www.vision2030.gov.sa/ar/" target="_blank">
                 <img class="vision-img" src="/assets/img/vision.png" alt="vision">
             </a>

           </div>

       </div>
   </div>
</div>
<!--end-nav-top-->
<!--start-nav-->
<nav class="navbar navbar-expand-xl navbar-index" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="/assets/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-1 mb-2 mb-lg-0 align-items-center">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.index') }}">
                      @lang('Main page')
                  </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @lang('About Us')
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('frontend.about') }}" >@lang('About the enterprise')</a></li>
                      <li><a class="dropdown-item" href="{{ route('frontend.about.enterprise_missions') }}" >@lang('Enterprise missions')</a></li>
                      <li><a class="dropdown-item" href="{{ route('frontend.about.regulations_and_policies') }}" >@lang('Regulations and Policies')</a></li>
                      <li><a class="dropdown-item" href="{{ route('frontend.about.board_of_trustees') }}" >@lang('Board of Trustees')</a></li>
                      <li><a class="dropdown-item" href="{{ route('frontend.about.committees') }}" >@lang('Committees')</a></li>
                      <li><a class="dropdown-item" href="{{ route('frontend.about.administrative_structure') }}" >@lang('The administrative structure')</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdowne-one" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @lang('Contribute with us')
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdowne-one">
                  {{-- <li><a class="dropdown-item" href="{{ route('frontend.contribute.donate') }}"  >@lang('Donate')</a></li> --}}
                  <li><a class="dropdown-item" href="{{ route('frontend.contribute.volunteer') }}"  >@lang('Volunteer')</a></li>

                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.initiatives') }}"  >@lang('Initiatives')</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-tow" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @lang('E-Services')
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown-tow">
                  <li><a class="dropdown-item" href="{{ route('frontend.e-services.partnerships') }}"  >@lang('Partnerships')</a></li>
                  <li><a class="dropdown-item" href="{{ route('frontend.e-services.associations') }}">@lang('Associations')</a></li>
                  <li><a class="dropdown-item" href="{{ route('frontend.e-services.memberships') }}">@lang('Memberships')</a></li>
                  <li><a class="dropdown-item" href="{{ route('frontend.e-services.recruitment') }}">@lang('Recruitment')</a></li>

                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-tow" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @lang('Media Center')
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown-tow">
                    <li><a class="dropdown-item" href="{{ route('frontend.media.news') }}" >@lang('News')</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.media.gallery') }}" >@lang('Gallery')</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.media.videos') }}" >@lang('Videos') </a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.contact-us') }}" >@lang('Call Us')</a>
              </li>
          </ul>
        </div>
    </div>
</nav>

<!--end-nav-->

<!--title-page-->
<div class="title-page pt-2 pb-2">
    <div class="container">
        <div class="row row-login-title justify-content-between align-items-center">
            <h6 class="col-md-6 title-page-top"> {{ $title }}</h6>

            <div class="col-md-6 account-link-login">
                  @if (Auth::user())
                    @if( $logged_in_user->isAdmin())
                      <a class="link-Login" href="{{ route('admin.dashboard') }}" title="@lang('Login') ">@lang('Dashboard') </a>
                    @elseif( $logged_in_user->isAssociation())
                      <a class="link-Login" href="{{ route('frontend.user.account') }}" title="@lang('Login') ">@lang('My Account') </a>
                    @endif
                  @endif
              </div>

        </div>
    </div>
</div>
<!--title-page-->
