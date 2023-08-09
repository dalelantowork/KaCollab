<div class="mb-4">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', $office->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" name="default" {{$office->default ? 'checked' : null}}>
        <label class="form-check-label" for="default">
            Default
        </label>
    </div>
</div>
<div class="mb-4">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>