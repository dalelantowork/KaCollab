<div class="mb-4">
    {{ Form::label('first_name', null, ['class' => 'form-label']) }}
    {{ Form::text('first_name', $user->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
    {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('middle_name', null, ['class' => 'form-label']) }}
    {{ Form::text('middle_name', $user->middle_name, ['class' => 'form-control' . ($errors->has('middle_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
    {!! $errors->first('middle_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('last_name', null, ['class' => 'form-label']) }}
    {{ Form::text('last_name', $user->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
    {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('username', null, ['class' => 'form-label']) }}
    {{ Form::text('username', $user->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
    {!! $errors->first('username', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('email', null, ['class' => 'form-label']) }}
    {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>

@if($roles->count())
<div class="row mt-4 mb-3">
    <div class="col-12">
        <h3 class="block-title">Roles</h3>
    </div>
</div>
<div class="row">
@foreach($roles as $role)
    <div class="col-3">
        <div class="form-check">
            <input {{in_array($role->id, @$roleId ?: []) ? 'checked' : null }} class="form-check-input" type="checkbox" name="role_id[]" value="{{$role->id}}" id="role-{{$role->id}}" >
            <label class="form-check-label" for="role-{{$role->id}}">
              {{$role->name}}
            </label>
        </div>
    </div>
@endforeach
</div>
@endif

@if($offices->count())
<div class="row mt-4 mb-3">
    <div class="col-12">
        <h3 class="block-title">Offices</h3>
    </div>
</div>
<div class="row">
@foreach($offices as $office)
    <div class="col-3">
        <div class="form-check">
            <input {{ $office->id == $user->office_id ? 'checked' : null }} class="form-check-input" type="radio" name="office_id" value="{{$office->id}}" id="office-{{$office->id}}" >
            <label class="form-check-label" for="office-{{$office->id}}">
              {{$office->name}}
            </label>
        </div>
    </div>
@endforeach
</div>
@endif


<div class="mt-4">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>