<form action="{{route('citizen-profile.store')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
            Other Info
        </div>
        @php
            $civilStatuses = [
                'single',
                'married',
                'widower',
                'divorced',
                'annulled',
                'legally separated',
            ];
        @endphp
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="birthdate">Birth Date</label>
                        <input type="date" class="form-control" name="birthdate" value="{{$user->birthdate}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="birthplace">Birth Place</label>
                        <input type="text" class="form-control" name="birthplace" value="{{$user->birthplace}}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" name="occupation" value="{{$user->occupation}}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <div class="form-group">
                        <label for="civil_status">Civil Status</label>
                        <select name="civil_status" id="civil_status" class="form-control">
                            @foreach($civilStatuses as $civilStatus)
                            <option value="{{$civilStatus}}" {{$civilStatus == $user->civil_status ? 'selected' : ''}}>{{ucfirst($civilStatus)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{$user->gender}}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group">
                        <label for="spouse_name">Spouse Name</label>
                        <input type="text" class="form-control" name="spouse_name" value="{{$user->spouse_name}}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" name="tin" value="{{$user->tin}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-danger text-white">
            In case of emergency
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="emergency_name">Name</label>
                        <input type="text" class="form-control" name="emergency_name" value="{{$user->emergency_name}}" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="emergency_address">Address</label>
                        <input type="text" class="form-control" name="emergency_address" value="{{$user->emergency_address}}" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="emergency_contact">Contact</label>
                        <input type="text" class="form-control" name="emergency_contact" value="{{$user->emergency_contact}}" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary form-control">Save</button>
</form>