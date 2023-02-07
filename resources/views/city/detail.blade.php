@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">City Details</div>
                    <div class="card-body">
                          <table class="table table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $city->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $city->name }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $city->country->name }}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>{{ $city->district }}</td>
                            </tr>
                            <tr>
                                <td>Population</td>
                                <td>{{ $city->population }}</td>
                            </tr>
                          </table>
                    </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    
@endpush