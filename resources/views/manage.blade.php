@extends('layouts.app')

@section('content')

<div class="container">
    <h1>MANAGE CUSTOMER</h1>
    <table class="table table-striped table-dark table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Customer Name</th>
                <th scope="col">EMPLOYEE NAME</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Atelier graphique</td>
                <td>Carine Schmitt</td>
                <td><img style="width: 5%; height:5%" src="https://png.pngtree.com/svg/20170209/dd5d9cf09e.svg" alt="setting icon" href="#"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Sigmal Gift Stores</td>
                <td>Jean King</td>
                <td><img style="width: 5%; height:5%" src="https://png.pngtree.com/svg/20170209/dd5d9cf09e.svg" alt="setting icon" href="#"></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Australian Collectors, Co.</td>
                <td>Peter Ferguson</td>
                <td ><img style="width: 5%; height:5%" src="https://png.pngtree.com/svg/20170209/dd5d9cf09e.svg" alt="setting icon" href="#"></td>

            </tr>
        </tbody>
    </table>

</div>

@endsection