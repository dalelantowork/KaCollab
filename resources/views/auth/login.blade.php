@extends('layouts.auth')
@section('js')
<!-- jQuery -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Page JS Code -->
@include('includes.notifications')
@endsection
@section('content')
<!-- Page Content -->
<div class="row g-0 justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-8 d-flex align-items-center p-2 px-sm-0">
        <!-- Login Block -->
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('{{ asset('media/photos/photo11@2x.jpg') }}') ;">
            <div class="row g-0">
                <div class="col-md-6 order-md-1 bg-body-extra-light">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <!-- Header -->
                        <div class="mb-2 text-center">
                            <a class="link-fx fw-bold fs-1" href="index.html">
                                <span class="text-dark"></span><span class="text-primary">{{config('office.name')}}</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Login</p>
                        </div>
                        <!-- END Header -->
                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <input type="text" class="form-control form-control-alt" name="username" placeholder="Username">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control form-control-alt" name="password" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn w-100 btn-hero btn-primary">
                                <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Login
                                </button>
                                
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
                                        <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot password
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('register') }}">
                                        <i class="fa fa-plus opacity-50 me-1"></i> Register
                                    </a>
                                </p>
                            </div>
                            <div class="mb-1">
                                <div class="btn-group btn-group-justified w-100" role="group" >
                                    <a href="{{ route('login.google') }}" class="btn btn-danger btn-block">Google</a>
                                    <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block">Facebook</a>
                                    <a href="{{ route('login.linkedin') }}" class="btn btn-dark btn-block">Linkedin</a>
                                </div>
                            </div>
                        </form>
                        <!-- END Login Form -->
                    </div>
                </div>
                <div class="col-md-6 order-md-0 d-flex align-items-center">
                </div>
                {{-- <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="d-flex">
                            <a class="flex-shrink-0 img-link me-3" href="javascript:void(0)">
                                <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar12.jpg') }}" alt="">
                            </a>
                            <div class="flex-grow-1">
                                <p class="text-white fw-semibold mb-1">
                                    Amazing framework with tons of options! It helped us build our project!
                                </p>
                                <a class="text-white-75 fw-semibold" href="javascript:void(0)">Scott Young, Web Developer</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- END Login Block -->
    </div>
</div>
<!-- END Page Content -->
@endsection