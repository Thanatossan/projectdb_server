@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CUSTOMER STATUS</h1>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Customer Number</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Product List</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>103</td>
                <td>Atelier graphique</td>
                <td>
                    <p>1968 Ford Mustang</p>
                    <p>2001 Ferrari Enzo</p>
                    <p>1968 Ford Mustang</p>
                </td>
                <td>shipped</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>112</td>
                <td>Signal Gift Stores</td>
                <td>
                    <p>2001 Ferrari Enzo</p>
                    <p>2001 Ferrari Enzo</p>
                </td>
                <td>cancelled</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>114</td>
                <td>Australian Collectors, Co.</td>
                <td>
                    <p>1904s Ford truck</p>
                </td>
                <td>on hold</td>
            </tr>
        </tbody>
    </table>
    
</div>

@endsection