@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee Profile</div>


                <div class="card-body">
                <!-- seesion -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <!-- end of seesion -->
                @foreach ($employees as $employee)
                    <div class="container">
                        <div class="row">
                        <div class="col-sm">
                        <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="300" width="300">
                        </div>
                        <div class="col-sm">
                        <h5> Name : {{$employee->firstName}}  {{$employee->lastName}} </h5>
                        <h5> Email: {{$employee->email}}</h5>
                        <h5> Job Title: {{$employee->jobTitle}}</h5>
                        <a href="{{ route('register') }}">Register</a>
                        </div>
                        </div>
                    </div>
                @endforeach






<!-- 
                    You are logged in as Admin: 

                    @foreach ($employees as $employee)
                    <h3> {{$employee->email}} </h3>
                    @endforeach
                     -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
