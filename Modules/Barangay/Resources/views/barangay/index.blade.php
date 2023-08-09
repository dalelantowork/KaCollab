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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-1 my-sm-2">Barangay List</h1>
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
            <h3 class="block-title">Barangay</h3>
            {{-- <a href="{{ route('barangay.create') }}" class="btn btn-primary">Create</a> --}}
        </div>
        <div class="block-content">
            <table class="table table-striped table-vcenter">
                <thead>
                    <tr>
                        <th>@sortablelink('id', 'ID')</th>
                        <th>@sortablelink('region_name', 'Region Name')</th>
                        <th>@sortablelink('province_name', 'Province Name')</th>
                        <th>@sortablelink('municipality_name', 'Municipality Name')</th>
                        <th>@sortablelink('barangay_name', 'Barangay Name')</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangays as $barangay)
                    <tr>
                        <td>{{ $barangay->id }}</td>
                        <td>{{ $barangay->region_name }}</td>
                        <td>{{ $barangay->province_name }}</td>
                        <td>{{ $barangay->municipality_name }}</td>
                        <td>{{ $barangay->barangay_name }}</td>
                        <td>
                            <form action="{{ route('barangay.destroy', [$barangay->id]) }}" method="POST">
                                {{-- <a class="btn btn-sm btn-primary " href="{{ route('barangays.show', [$barangay->id]) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                <a class="btn btn-sm btn-success" href="{{ route('barangay.edit', [$barangay->id]) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $barangays->withQueryString()->links() }}
        </div>
    </div>
    <!-- END Striped Table -->
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection