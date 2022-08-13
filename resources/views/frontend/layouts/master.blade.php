<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('App Name') | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    <meta name="keywords" content="Establishment, honoring the dead,eligibility">
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="Honoring the Dead National Foundation"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="" />
    <meta property="og:image" content="/assets/img/logo.png"/>
    @yield('meta')

    <link href="/assets/img/logo.png"  rel="shortcut icon"/>

    @stack('before-styles')

      <!-- Bootstrap CSS -->
      <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
      <!--link-font-awsome-->
      <link href="/assets/css/fontawesome.css" rel="stylesheet">
      <!--stlye-css-->
      <link href="/assets/css/style.css" rel="stylesheet">
      <link href="/assets/css/style-ltr.css" rel="stylesheet"/>
    @stack('after-styles')

</head>
<body>

    <div id="app">
      <!--navbar-->
        @include('frontend.includes.navbar')
      <!--end-navbar-->

          @yield('content')

      <!--footer-->
        @include('frontend.includes.footer')
      <!--end-footer-->
    </div><!--app-->

    @stack('before-scripts')
    <!-- Required JS Files -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/form.js"></script>

    @stack('after-scripts')
</body>
</html>
