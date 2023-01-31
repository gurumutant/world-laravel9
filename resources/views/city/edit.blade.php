@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit City</div>
                        <!-- form start -->
                        {{ Form::model($city, ['url'=>route('city.update',$city->id), 'method'=>'put']) }}
                    <div class="card-body">
                        @include('city._form')
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" dusk="update-city" id="save">Update</button>
                        <a href="{{ route('city.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    
@endpush