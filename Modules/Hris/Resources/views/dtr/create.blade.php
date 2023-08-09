@extends('layouts.backend')
@section('css')
@endsection
@section('content')
<div class="content">
  <!-- Your Block -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
      Register New Employee
      </h3>
    </div>
    <div class="block-content pb-3">
        <form action="{{route('hris.store')}}" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col-12 col-lg-4">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" required>
                </div>
                <div class="col-12 col-lg-4">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}" >
                </div>
                <div class="col-12 col-lg-4">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control"  value="{{old('last_name')}}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <label for="employee_status">Employee Status</label>
                    <select name="employee_status" required class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="employee_id">Employee Id</label>
                    <input type="text" name="employee_id" class="form-control"  value="{{old('employee_id')}}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="{{old('username')}}" required>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}" >
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" required>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="text" name="password_confirmation" class="form-control" >
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
@section('js')
<!-- jQuery -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Page JS Code -->
@include('includes.notifications')
@endsection