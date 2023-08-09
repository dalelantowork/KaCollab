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

<!-- Hero -->
<div class="bg-image" style="background-image: url('{{asset('media/photos/photo13@2x.jpg')}}');">
  <div class="bg-black-50">
    <div class="content content-full">
      <div class="d-flex justify-content-between align-items-center">
        <h1 class="flex-grow-1 fs-2 text-white my-2">
          <i class="fa fa-boxes text-white-50 me-1"></i> All Influencers
        </h1>
        <a class="btn btn-primary my-2" href="javascript:void(0)">
          <i class="fa fa-fw fa-plus opacity-50"></i>
          <span class="d-none d-sm-inline ms-1">New Influencer</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <form action="" method="POST" onsubmit="return false;">
    <div class="row items-push">
      <div class="col-sm-6 col-xl-3">
        <div class="input-group">
          <span class="input-group-text">
            <i class="fa fa-search"></i>
          </span>
          <input type="text" class="form-control border-start-0" id="dm-projects-search" name="dm-projects-search"
            placeholder="Search Influencers..">
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 offset-xl-6">
        <select class="form-select" id="dm-projects-filter" name="dm-projects-filter">
          <option value="all">All (6)</option>
          <option value="active">Active (3)</option>
          <option value="pending">Pending (1)</option>
          <option value="planning">Planning (1)</option>
          <option value="canceled">Canceled (1)</option>
        </select>
      </div>
    </div>
  </form>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Project #1 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> September 25
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Juan Dela Cruz</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Admin Office</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar2.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #1 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #2 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> October 12
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Pedro Santos</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Engineering Office</h4>
          <div class="push">
            <span class="badge bg-warning text-uppercase fw-bold py-2 px-3">IDLE</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar9.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #2 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #3 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> November 9
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">John Doe</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Veterinary Office</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar6.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #3 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #4 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> October 22
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Jane Doe</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Admin Office</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar8.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #4 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #5 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> April 15
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Paeng Perez</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Health Office</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar14.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #5 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #6 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> June 29
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Influencer
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Agustin Salvador</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">City Health Office</h4>
          <div class="push">
            <span class="badge bg-danger text-uppercase fw-bold py-2 px-3">OFFLINE</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar11.jpg')}}" alt="">
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-Bookmark me-1 opacity-50"></i> Bookmark
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #6 -->
    </div>
  </div>
</div>
<!-- END Page Content -->

@endsection