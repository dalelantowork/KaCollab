@extends('layouts.backend')
@section('content')

<div class="content content-full content-boxed">
    <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-primary">
            <div class="my-3">
                <i class="fa fa-2x fa-users text-white-75"></i>
            </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="fw-semibold">{{$user->first_name}} {{$user->last_name}}</div>
            <div class="fs-sm text-muted">Profile Edit</div>
            <a href="{{route('hris.index')}}" class="fs-sm text-muted">&laquo; Back to Dashbord</a>
        </div>
    </div>
    <ul class="nav nav-pills row mb-3" id="pills-tab" role="tablist">
        <li class="nav-item col-3" role="presentation">
            <button class="nav-link active form-control" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-citizen-info" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Employee Info</button>
        </li>
        <li class="nav-item col-3" role="presentation">
            <button class="nav-link  form-control" id="pills-office-tab" data-bs-toggle="pill" data-bs-target="#pills-office" type="button" role="tab" aria-controls="pills-office" aria-selected="false">Offices</button>
        </li>
        <li class="nav-item  col-3" role="presentation">
            <button class="nav-link  form-control" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other-info" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Other Info</button>
        </li>
        <li class="nav-item  col-3" role="presentation">
            <button class="nav-link  form-control" id="pills-signature-tab" data-bs-toggle="pill" data-bs-target="#pills-signature" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Images</button>
        </li>
    </ul>
    <div class="tab-content row" id="pills-tabContent">
        <div class="tab-pane fade show active col-12" id="pills-citizen-info" role="tabpanel" aria-labelledby="pills-home-tab">
            @include('citizen.includes.citizen_info')
        </div>
        <div class="tab-pane fade  col-12" id="pills-office" role="tabpanel" aria-labelledby="pills-profile-tab">
            @include('hris::includes.office')
        </div>
        <div class="tab-pane fade  col-12" id="pills-other-info" role="tabpanel" aria-labelledby="pills-contact-tab">
            @include('citizen.includes.other_info')
        </div>
        <div class="tab-pane fade  col-12" id="pills-signature" role="tabpanel" aria-labelledby="pills-contact-tab">
            @include('citizen.includes.signature')
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/plugins/signature-pad/signature_pad.umd.min.js') }}"></script>
<script>
    let canvas = null
    let signaturePad = null
    const signatureDefault = '{{$user->signature}}'
    $(document).on('click', '#pills-signature-tab', function(){
        setTimeout(function(){
            canvas = document.getElementById("signature");
            signaturePad = new SignaturePad(canvas);
            if (signatureDefault) {
                signaturePad.fromDataURL(signatureDefault, { ratio: 1, width: 450, height: 300})
            }
        }, 300);
    })

    $(document).on('click', '#signature-clear', function(){
        canvas = document.getElementById("signature");
        signaturePad = new SignaturePad(canvas);
    })

    $(document).on('click', '#btn-save-signature', function(){
        const dataBase64 = signaturePad.toDataURL()
        $('#signature-base64').val(dataBase64)
        $('#signature-upload').submit()
    })
</script>
@endsection