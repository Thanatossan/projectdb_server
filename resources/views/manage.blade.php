@extends('layouts.app')

@section('content')

<div class="container">
    <h1>MANAGE CUSTOMER</h1>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Customer Name</th>
                <th scope="col">EMPLOYEE NAME</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Atelier graphique</td>
                <td>Carine Schmitt</td>
                <td>
                    <img src="{{URL::asset('/asset/settingWhite_18dp.png')}}">
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Sigmal Gift Stores</td>
                <td>Jean King</td>
                <td>
                    <img src="{{URL::asset('/asset/settingWhite_18dp.png')}}">
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Australian Collectors, Co.</td>
                <td>Peter Ferguson</td>
                <td>
                    <img src="{{URL::asset('/asset/settingWhite_18dp.png')}}">
                </td>
            </tr>
        </tbody>
    </table>

</div>

@endsection