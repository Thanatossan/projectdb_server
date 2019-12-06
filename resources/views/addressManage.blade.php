@extends('layouts.app')

@section('content')
    <h1>Manage Employee</h>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All address</div>

                    <div class="card-body">
                        @foreach($addresses as $address)
                            <div class="alert alert-success" role="alert">
                                <div class="row">
                                    <div class="col-sm">
                                        <h5>Address : {{$address->addressLine1}}</h5>
                                    </div>
                                    <div class="col-sm">
                                    <h5>Customername : {{$address->customerNumber}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
