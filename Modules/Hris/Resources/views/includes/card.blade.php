<div class="col-md-6 col-xl-4">
    <!-- Project #1 -->
    <div class="block block-rounded h-100 mb-0">
      <div class="block-header">
        <div class="flex-grow-1 text-muted fs-sm fw-semibold">
          <i class="fa fa-clock me-1"></i> {{date('M d, Y', strtotime($user->created_at))}}
        </div>
        {{-- <div class="block-options">
          <div class="dropdown">
            <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Employee
              </a>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="block-content bg-body-light text-center">
        <h3 class="fs-4 fw-bold mb-1">
          <a href="{{route('hris.show', $user->id)}}">{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</a>
        </h3>
        @foreach($user->offices as $office)
        <h4 class="fs-6 text-muted m-0">{{$office->name}}</h4>
        @endforeach
        <div class="push pt-3">
          <span class="badge bg-success text-uppercase fw-bold py-2 px-3">{{$user->employee_status}}</span>
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
            <a class="btn w-100 btn-alt-secondary" href="{{route('hris.show', $user->id)}}">
              <i class="fa fa-eye me-1 opacity-50"></i> View
            </a>
          </div>
          <div class="col-6">
            <a class="btn w-100 btn-alt-secondary" href="{{route('dtr.show', $user->id)}}">
              <i class="fa fa-archive me-1 opacity-50"></i> DTR
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Project #1 -->
  </div>