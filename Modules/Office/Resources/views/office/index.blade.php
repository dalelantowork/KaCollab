@extends('layouts.backend')
@section('js')
<!-- jQuery -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Page JS Code -->
@include('includes.notifications')
@endsection
@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-1 my-sm-2">Office</h1>
        </div>
    </div>
</div>
<!-- END Hero -->
<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <!-- Striped Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Office</h3>
            <a href="{{ route('office.create') }}" class="float-right btn btn-primary">Create New Office</a>
        </div>
        <div class="block-content">
            <table class="table table-striped table-vcenter">
                <thead>
                    <tr>
                        <th>@sortablelink('id', 'ID')</th>
                        <th>@sortablelink('name', 'Name')</th>
                        <th>@sortablelink('default', 'Default')</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offices as $office)
                    <tr>
                        <td>{{ $office->id }}</td>
                        <td>{{ $office->name }}</td>
                        <td>{{ (bool) $office->default }}</td>
                        <td>
                            @if(!$office->default)
                            <form action="{{ route('office.destroy', [$office->id]) }}" method="POST">
                                @endif
                                <a class="btn btn-sm btn-primary " href="{{ route('office.show', [$office->id]) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                <a class="btn btn-sm btn-success" href="{{ route('office.edit', [$office->id]) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                @if(!$office->default)
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $offices->withQueryString()->links() }}
        </div>
    </div>
    <!-- END Striped Table -->
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection