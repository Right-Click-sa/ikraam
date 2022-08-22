@extends('frontend.layouts.master')

@section('title', __('Contribute with us'))

@section('content')

  <!--start-Contribute -->
    <section class="component-Contribute  pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-lg-2 col-md-3 m-3">
                    <div class="d-Contribute text-center py-4">
                       <a  href="{{ route('frontend.contribute.donate') }}" >
                        <img class="d-block" src="/assets/img/kinde.png" alt="kind">
                         @lang('Donate')
                       </a>
                    </div>
                </div> --}}
                <div class="col-lg-2 col-md-3 m-3">
                    <div class="d-Contribute text-center py-4">
                        <a  href="{{ route('frontend.contribute.volunteer') }}" >
                            <img class="d-block" src="/assets/img/volunteer.png" alt="volunteer">
                            @lang('Volunteer')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end-Contribute-->

@endsection
