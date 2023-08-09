@extends('layouts.backend')
@section('js')

<!-- jQuery -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Page JS Code -->
<script src="{{asset('js/dashmix.app.min.js')}}"></script>
<script src="{{asset('js/plugins/chart.js/chart.min.js')}}"></script>
<script src="{{asset('js/pages/be_pages_ecom_dashboard.min.js')}}"></script>
@include('includes.notifications')
@endsection
@section('content')

<div class="content">
  <!-- Quick Overview -->
  <div class="row items-push">
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-primary mb-1">
              {{$applicationsQuery->where('current_status','pending')->count()}}
          </div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Pending For Processing
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-success mb-1">
            {{$applicationsQuery->where('current_status','completed')->count()}}
          </div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Total Accomplished
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold mb-1">
            {{ $applicationsQuery->where('current_status','completed')
                  ->where('created_at', '>=', date('Y-m-d').' 00:00:00')
                  ->count() }}
          </div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Total Processed Today
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold mb-1">
            PHP {{number_format($applicationModel->total_earnings_today, 2)}}
          </div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Earnings Today
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Quick Overview -->
  <!-- All Orders -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">All Applications</h3>
      <div class="block-options">
        <div class="dropdown">
          <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Filters
            <i class="fa fa-angle-down ms-1"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Pending..
              <span class="badge bg-primary rounded-pill">{{$applicationsQuery->where('current_status','pending')->count()}}</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Processing
              <span class="badge bg-black-50 rounded-pill">{{$applicationsQuery->where('current_status','processing')->count()}}</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              For Approval
              <span class="badge bg-black-50 rounded-pill">{{$applicationsQuery->where('current_status','for-approval')->count()}}</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Canceled
              <span class="badge bg-black-50 rounded-pill">{{$applicationsQuery->where('current_status','canceled')->count()}}</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Accomplished
              <span class="badge bg-black-50 rounded-pill">{{$applicationsQuery->where('current_status','accomplished')->count()}}</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              All
              <span class="badge bg-black-50 rounded-pill">{{$applicationsQuery->count()}}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="block-content bg-body-dark">
      <!-- Search Form -->
      <form action="{{route('dashboard.index')}}">
        <div class="mb-4">
          <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search"
            name="dm-ecom-orders-search" placeholder="Search all applications..">
        </div>
      </form>
      <!-- END Search Form -->
    </div> --}}
    <div class="block-content">
      <!-- All Orders Table -->
      <div class="table-responsive">
        <table class="table table-borderless table-striped table-vcenter fs-sm">
          <thead>
            <tr>
              <th class="text-center">Forms</th>
              <th class="d-none d-sm-table-cell text-center">Submitted</th>
              <th>Status</th>
              <th class="d-none d-xl-table-cell">Citizen Name</th>
              <th class="d-none d-xl-table-cell text-center">Days since applied</th>
              <th class="d-none d-sm-table-cell text-end">Payable</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($applications as $application)
            <tr>
              <td class="text-center">
                <a class="fw-semibold" href="{{route('processing-page')}}">
                  <strong>{{@$application->form->name}}</strong>
                </a>
              </td>
              <td class="d-none d-sm-table-cell text-center">{{date('M d Y', strtotime($application->created_at))}}</td>
              <td class="fs-base">
                <span class="badge rounded-pill bg-info">{{$application->current_status}}</span>
              </td>
              <td class="d-none d-xl-table-cell">
                <a class="fw-semibold" href="be_pages_ecom_customer.html">
                  {{@$application->user->first_name}}
                  {{@$application->user->last_name}}
                </a>
              </td>
              <td class="d-none d-xl-table-cell text-center">
                <a class="fw-semibold" href="{{route('processing-page')}}">{{$application->day_since_applied}}</a>
              </td>
              <td class="d-none d-sm-table-cell text-end">
                <strong>PHP 0.00</strong>
              </td>
              <td class="text-center fs-base">
                <a class="btn btn-sm btn-alt-secondary" href="{{route('processing-page')}}">
                  <i class="fa fa-fw fa-eye"></i>
                </a>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-fw fa-times text-danger"></i>
                </a>
              </td>
            </tr>
            @endforeach
            @if(!$applications->count())
            <tr>
              <td colspan="10" align="center">No Records found</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
      <!-- END All Orders Table -->

      <!-- Pagination -->
      {{$applications->links()}}
        <!-- END Pagination -->
    </div>
  </div>
  <!-- END All Orders -->
</div>
@endsection