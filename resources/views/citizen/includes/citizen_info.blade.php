<form action="{{route('citizen-profile.store')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
                Information
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$user->username}}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="contact_no">Contact No</label>
                        <input type="text" class="form-control" name="contact_no" value="{{$user->contact_no}}" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="form-group">
                        <label for="username">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="username">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" value="{{$user->middle_name}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="username">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                    </div>
                </div>
            </div>
            @if($user->hasRole('employee'))
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-group">
                        <label for="employee_id">Employee Id</label>
                        <input type="text" class="form-control" name="employee_id" value="{{$user->employee_id}}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="employee_status">Employee Status</label>
                    <select name="employee_status" required class="form-control">
                        <option value="active" {{ 'active' == $user->employee_status ? 'checked' : ''}}>Active</option>
                        <option value="inactive" {{ 'inactive' == $user->employee_status ? 'checked' : ''}}>Inactive</option>
                    </select>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
            Address
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" name="street" value="{{$user->street}}" >
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" class="form-control" name="barangay" value="{{$user->barangay}}" >
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" name="province" value="{{$user->province}}" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" value="{{$user->country}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" name="zip_code" value="{{$user->zip_code}}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary form-control">Save</button>
</form>