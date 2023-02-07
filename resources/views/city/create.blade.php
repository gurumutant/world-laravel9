@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create City</div>
                        <!-- form start -->
                    {{ Form::open(['url'=>route('city.store')]) }}
                    <div class="card-body">
                        @include('city._form')
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" dusk="create-kelas" id="save">Save</button> 
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