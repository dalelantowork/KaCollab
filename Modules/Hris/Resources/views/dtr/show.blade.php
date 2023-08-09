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
              <i class="fa fa-boxes text-white-50 me-1"></i> Daily Time Record
            </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

      <div class="block block-rounded">
        <div class="block-header block-header-default">
         @if(auth()->id() == $user->id)
          <form action="{{route('dtr.store')}}" method="post" id="time-record">
            @csrf
            <input type="hidden" name="dtr_id" value="{{@$latest->id}}">
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="employee_id" value="{{$user->employee_id}}">
            @if(empty($latest))
            <input type="hidden" name="time_in" id="time">
            <div id="time-activate" class="start-time btn btn-primary">Time In</div>
            @elseif(@$latest->time_out)
            <input type="hidden" name="time_in" id="time">
            <div id="time-activate" class="start-time btn btn-primary">Time In</div>
            @elseif(@$latest->time_in && empty(@$latest->time_out))
            <input type="hidden" name="time_out" id="time">
            <div id="time-activate" class="start-time btn btn-danger">Time Out</div>
            @endif
          </form>
          @endif
          <div class="float-right d-flex">
            @if(empty($latest))
            <h3 id="timer">00:00:00</h3>
            @elseif(@$latest->time_in && @$latest->time_out)
            <h3 id="timer">00:00:00</h3>
            @else
            <h3 id="timer">{{@$latest->time_diff ?: '00:00:00'}}</h3>
            @endif
          </div>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
          Time Records
          </h3>
        </div>
        <div class="block-content pb-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Duration</th>
              </tr>
            </thead>
            <tbody>
              @if(!$user->dtrs)
              <tr>
                <td colspan="4" align="center">No Records Available</td>
              </tr>
              @endif
              @php
              $dtrs =  $user->dtrs()->orderBy('created_at', 'desc')->paginate(20); 
              @endphp
              @foreach($dtrs as $dtr)
              <tr>
                <th>
                  {{ date('M d, Y', strtotime($dtr->time_in)) }}
                  {{ $dtr->time_out && date('M d, Y', strtotime($dtr->time_in)) != date('M d, Y', strtotime($dtr->time_out)) ? '-' . date('M d, Y', strtotime($dtr->time_out)) : ''}}
                </th>
                <td>
                  {{ date('H:i:s', strtotime($dtr->time_in)) }}
                </td>
                <td>
                  {{ @$dtr->time_out ?  date('H:i:s', strtotime($dtr->time_out)) : '--' }}
                </td>
                <td>
                  {{$dtr->duration ?: '--'}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $dtrs->links() }}
        </div>
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
  $(document).on('click', '#time-activate', function(){
    const date = new Date();
    $('#time').val(date.toISOString().replace('T',' ').replace('Z',' '))
    $('#time-record').submit()
  });
</script>
@if(@$latest->time_in && empty(@$latest->time_out))
<script>
  let milliseconds = 0
  let seconds = {{(int) $latest->time_diff_second ?: 0}}
  let minutes = {{(int) $latest->time_diff_minute ?: 0}} 
  let hours = {{(int) $latest->time_diff_hour ?: 0}}
  let int = null;

  int = setInterval(
  function() {
    milliseconds+=10;
    if(milliseconds == 1000){
        milliseconds = 0;
        seconds++;
        if(seconds == 60){
            seconds = 0;
            minutes++;
            if(minutes == 60){
                minutes = 0;
                hours++;
            }
        }
    }
    let h = hours < 10 ? "0" + hours : hours;
    let m = minutes < 10 ? "0" + minutes : minutes;
    let s = seconds < 10 ? "0" + seconds : seconds;
    let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;
    document.getElementById('timer').innerHTML = ` ${h}:${m}:${s}`;
    console.log('sdljkf')
  }, 10);
</script>
@endif

@endsection