@extends('layouts.app')

@section('content')
    <form action="/insert">
        <table>
            <tr>Customer Name : <input type="text"></tr><br><br>
            <tr>Shipped Date : <input type="date"></tr><br><br>
            <tr>Order List : </tr><br><br>
        </table>
    </form>
@endsection