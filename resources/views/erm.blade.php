@extends('layouts.app')

@section('content')
@foreach($login_employee as $loginedEmployee)
<div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="100"
                width="100" style="background-color: black;">
        </div>
        <div class="col-sm">
            <h5> Name : {{$loginedEmployee->firstName}} {{$loginedEmployee->lastName}} </h5>
            <h5> Email: {{$loginedEmployee->email}}</h5>
            <h5> Job Title: {{$loginedEmployee->jobTitle}}</h5>
        </div>

    </div>
</div>
<div class="container">
    <h1>Employee Resource Management</h1>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Employee Number</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col" colspan="2">Email</th>
                <th scope="col">Office Code</th>
                <th scope="col">Job Title</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <div>
                    @foreach($employees as $employee)
                    <td>{{ $employee-> employeeNumber}}</td>
                    <td>{{ $employee-> firstName}}</td>
                    <td>{{ $employee-> lastName}}</td>
                    <td>{{ $employee-> email}}</td>
                    <td colspan="2">{{ $employee-> officeCode}}</td>
                    <td>{{ $employee-> jobTitle}}</td>
                </div>
                <td>
                    <a href="{{action('AdminController@edit',$employee-> employeeNumber)}}"
                        class="btn btn-success">Promote / Demote</a>
                </td>


            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endforeach
@endsection