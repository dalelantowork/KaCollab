@extends('layouts.backend')
@section('css')
@endsection
@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{asset('media/photos/photo13@2x.jpg')}}');">
      <div class="bg-black-50">
        <div class="content content-full">
          <div class="d-flex justify-content-between align-items-center">
            <h1 class="flex-grow-1 fs-2 text-white my-2">
              <i class="fa fa-boxes text-white-50 me-1"></i> All Employees
            </h1>
            <a class="btn btn-primary my-2" href="{{route('hris.create')}}">
              <i class="fa fa-fw fa-plus opacity-50"></i>
              <span class="d-none d-sm-inline ms-1">New Employee</span>
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
              <input type="text" class="form-control border-start-0" id="dm-projects-search" name="dm-projects-search" placeholder="Search Employees..">
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 offset-xl-6">
            <select class="form-select" id="dm-projects-filter" name="dm-projects-filter">
                @foreach($statuses as $status => $count)
                    <option value="{{$status}}">{{ucfirst($status)}} ({{$count}})</option>
                @endforeach
            </select>
          </div>
        </div>
      </form>
      <div class="row items-push" id="employee-row">
        @if(0 == $statuses['all'])
        <div class="col-12">
            <center>
                <h4>No Registered Employee</h4>
            </center>
        </div>
        @endif
        @if(0 != $statuses['all'])
            @foreach($users as $user)
                @include('hris::includes.card')
            @endforeach
        @endif

      </div>
    </div>
    <!-- END Page Content -->
  </main>
@endsection
@section('js')
<!-- jQuery -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Page JS Code -->
@include('includes.notifications')

<script>
  const userDatas = {!! $users !!}
  let showUsers = {!! $users !!}
  let textFilter = ''
  const showUrl = "{{url('hris')}}"
  const dtrUrl = "{{url('dtr')}}"
  const avatar = "{{asset('media/avatars/avatar2.jpg')}}"
  console.log(showUsers)
  $(document).on('keyup', '#dm-projects-search', function() {
    const value = $(this).val()
    showUsers = userDatas.filter(userData => {
      return userData.first_name.toLowerCase().includes(value.toLowerCase()) ||
              userData.last_name.toLowerCase().includes(value.toLowerCase()) ||
              userData.email.toLowerCase().includes(value.toLowerCase())
    })
    textFilter = value
    loadUsers()
  })

  $(document).on('change','#dm-projects-filter', function() {

    const value = $(this).val()
    showUsers = userDatas.filter(userData => {
      if ('all' == value) return true
      return userData.employee_status.toLowerCase().includes(value.toLowerCase())
    })
    textFilter = value
    loadUsers()
  })

  function loadUsers() {
    $('#employee-row').html("")

    if (!showUsers.length) {
      console.log(showUsers.length)
      $('#employee-row').html(`
      <div class="col-12">
            <center>
                <h4>No Registered Employee with '${textFilter}'</h4>
            </center>
        </div>`)
      return
    }
    let showHtml = ''
    $.each(showUsers, function(i, user) {
      const d = formatDate(user.created_at);

      showHtml += `<div class="col-md-6 col-xl-4">`
      showHtml += `<div class="block block-rounded h-100 mb-0">`
      showHtml += `<div class="block-header">`
      showHtml += `<div class="flex-grow-1 text-muted fs-sm fw-semibold">`
      showHtml += `<i class="fa fa-clock me-1"></i> ${d}`
      showHtml += `</div>`
      showHtml += `</div>`
      showHtml += `<div class="block-content bg-body-light text-center">`
      showHtml += `<h3 class="fs-4 fw-bold mb-1">`
      showHtml += `<a href="${showUrl}/${user.id}">${user.first_name} ${user.middle_name ? user.middle_name : '' } ${user.last_name}</a>`
      showHtml += `</h3>`
      $.each(user.offices, function(d, office) {
        showHtml += `<h4 class="fs-6 text-muted m-0">${office.name}</h4>`
      })
      showHtml += `<div class="push pt-3">`
      showHtml += `<span class="badge bg-success text-uppercase fw-bold py-2 px-3">${user.employee_status}</span>`
      showHtml += `</div>`
      showHtml += `</div>`
      showHtml += `<div class="block-content text-center">`
      showHtml += `<a class="img-link m-1" href="javascript:void(0)">`
      showHtml += `<img class="img-avatar img-avatar48" src="${avatar}" alt="">`
      showHtml += `</a>`
      showHtml += `</div>`
      showHtml += `<div class="block-content block-content-full">`
      showHtml += `<div class="row g-sm">`
      showHtml += `<div class="col-6">`
      showHtml += `<a class="btn w-100 btn-alt-secondary" href="${showUrl}/${user.id}">`
      showHtml += `<i class="fa fa-eye me-1 opacity-50"></i> View`
      showHtml += `</a>`
      showHtml += `</div>`
      showHtml += `<div class="col-6">`
      showHtml += `<a class="btn w-100 btn-alt-secondary" href="${dtrUrl}/${user.id}">`
      showHtml += `<i class="fa fa-archive me-1 opacity-50"></i> DTR`
      showHtml += `</a>`
      showHtml += `</div>`
      showHtml += `</div>`
      showHtml += `</div>`
      showHtml += `</div>`
      showHtml += `</div>`
    })

    $('#employee-row').html(showHtml)
  }

  function formatDate(dateString) {
    let d = new Date(dateString);
    let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
    let mo = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
    let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
    return `${mo} ${da}, ${ye}`
  }
</script>
@endsection