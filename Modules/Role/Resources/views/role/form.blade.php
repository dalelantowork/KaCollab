<div class="mb-4">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    @if($permissions->count())
    <div class="row mt-4">
        <div class="col-12">
            <h3 class="block-title">Permissions</h3>
        </div>
    </div>
    <div class="row">
    @foreach($permissions as $permission)
        <div class="col-3">
            <div class="form-check">
                <input {{in_array($permission->id, @$permissionId ?: []) ? 'checked' : null }} class="form-check-input" type="checkbox" name="permission_id[]" value="{{$permission->id}}" id="permission-{{$permission->id}}" >
                <label class="form-check-label" for="permission-{{$permission->id}}">
                  {{$permission->name}}
                </label>
            </div>
        </div>
    @endforeach
    </div>
    @endif
</div>
<div class="mb-4">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>