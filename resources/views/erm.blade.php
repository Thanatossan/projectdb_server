@extends('layouts.app')

@section('content')
@foreach($login_employee as $loginedEmployee)

<h2> {{$loginedEmployee -> employeeNumber}}</h2>


<div class="container">
    <h1>ERM</h1>

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
                    <button type="button" class="btn btn-success">Promote</button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Demote</button>
                </td>

            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endforeach
@endsection