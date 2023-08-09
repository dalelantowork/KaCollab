@extends('layouts.backend')
@section('content')
<!-- Hero -->
<div class="bg-image" style="background-image: url('{{asset('media/photos/photo17@2x.jpg')}}');">
    <div class="bg-black-25">
        <div class="content content-full">
        <div class="py-5 text-center">
            <a class="img-link" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('media/avatars/avatar10.jpg')}}" alt="">
            </a>
            <h1 class="fw-bold my-2 text-white">{{$user->first_name}} {{$user->last_name}}</h1>
            <h2 class="h4 fw-bold text-white-75">
                @if($user->email)
                Email <a class="text-primary-lighter" href="javascript:void(0)">{{ $user->email }}</a>
                @endif
            </h2>
            @if(auth()->id() == $user->id)
            <a href="{{route('citizen-profile.edit',$user->id)}}" class="btn btn-secondary m-1">
                <i class="fa fa-fw fa-pencil opacity-50 me-1"></i> Edit Profile
            </a>
            @endif
        </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
{{-- <div class="content content-full content-boxed">
    @include('citizen.includes.family')
    @include('citizen.includes.business')
    @include('citizen.includes.activities')
</div> --}}
<!-- END Page Content -->
@endsection