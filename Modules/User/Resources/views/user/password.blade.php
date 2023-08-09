<div class="mb-4">
    {{ Form::label('old_password', null, ['class' => 'form-label']) }}
    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password"
        required autocomplete="current-password">
    {!! $errors->first('old_password', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('password', null, ['class' => 'form-label']) }}
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        required autocomplete="current-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-4">
    {{ Form::label('confirm_password', null, ['class' => 'form-label']) }}
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
        name="password_confirmation" required autocomplete="current-password">
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>