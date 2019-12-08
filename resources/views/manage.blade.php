@extends('layouts.app')

@section('content')

<div class="container">
    <h1>MANAGE CUSTOMER</h1>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CUSTOMER NUMBER</th>
                <th scope="col">CUSTOMER NAME</th>
                <th scope="col" colspan="2">CONTACT NAME</th>
                <th scope="col">PHONE NUMBER</th>

            </tr>
        </thead>
        @foreach ($customers as $customer)
        <tbody>
            <tr>
                <td>{{ $customer->customerNumber}}</td>
                <td>{{ $customer->customerName }}</td>
                <td>{{ $customer->contactFirstName}}</td>
                <td>{{ $customer->contactLastName}}</td>
                <td>{{ $customer->phone}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

</div>

@endsection