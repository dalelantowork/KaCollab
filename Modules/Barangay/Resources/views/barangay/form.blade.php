<div class="mb-4">
    {{ Form::label('region_name', null, ['class' => 'form-label']) }}
    {{ Form::text('region_name', @$barangay->region_name ?: null, ['class' => 'form-control' . ($errors->has('region_name') ? ' is-invalid' : ''), 'placeholder' => 'Region Name']) }}
    {!! $errors->first('region_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('province_name', null, ['class' => 'form-label']) }}
    {{ Form::text('province_name', @$barangay->province_name ?: null, ['class' => 'form-control' . ($errors->has('province_name') ? ' is-invalid' : ''), 'placeholder' => 'Province Name']) }}
    {!! $errors->first('province_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('municipality_name', null, ['class' => 'form-label']) }}
    {{ Form::text('municipality_name', @$barangay->municipality_name ?: null, ['class' => 'form-control' . ($errors->has('municipality_name') ? ' is-invalid' : ''), 'placeholder' => 'Municipality Name']) }}
    {!! $errors->first('municipality_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="mb-4">
    {{ Form::label('barangay_name', null, ['class' => 'form-label']) }}
    {{ Form::text('barangay_name', @$barangay->barangay_name ?: null, ['class' => 'form-control' . ($errors->has('barangay_name') ? ' is-invalid' : ''), 'placeholder' => 'Barangay Name']) }}
    {!! $errors->first('barangay_name', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>