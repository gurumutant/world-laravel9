<div class="row">

    <div class="col-6">
        <div class="form-group">
            @if ($errors->has('name'))
                @php($inputClass = "form-control is-invalid")
            @else
                @php($inputClass = "form-control")
            @endif
            {{ Form::label('name', 'Nama Kota') }}
            {{ Form::text('name', null, [
                'class'=>$inputClass,
                'id' => 'name'
            ]) }}
            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>

    </div>

    <div class="col-6">
        <div class="form-group">
            @if ($errors->has('country_id'))
                @php($inputClass = "form-control select2 is-invalid")
            @else
                @php($inputClass = "form-control select2")
            @endif
            {{ Form::label('country_id', 'Negara') }}
            {{ Form::select('country_id', $countries,null,[
                'class'=>$inputClass,
                'data-placeholder' => 'Negara',
                'id' => 'country_id',
            ]) }}
            @if ($errors->has('country_id'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('country_id') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            @if ($errors->has('district'))
                @php($inputClass = "form-control is-invalid")
            @else
                @php($inputClass = "form-control")
            @endif
            {{ Form::label('district', 'Distrik') }}
            {{ Form::text('district', null, [
                'class'=>$inputClass,
                'id' => 'district'
            ]) }}
            @if ($errors->has('district'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('district') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            @if ($errors->has('population'))
                @php($inputClass = "form-control is-invalid")
            @else
                @php($inputClass = "form-control")
            @endif
            {{ Form::label('population', 'Populasi') }}
            {{ Form::text('population', null, [
                'class'=>$inputClass,
                'id' => 'population'
            ]) }}
            @if ($errors->has('population'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('population') }}</strong>
                </div>
            @endif
        </div>
    </div>
</div>