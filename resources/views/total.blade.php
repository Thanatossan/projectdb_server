@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CUSTOMER NAME</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Product Code</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>S12_1099</td>
                <td>1968 Ford Mustang</td>
                <td>95.34</td>
                <td>T</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>S12_1108</td>
                <td>2001 Ferrari Enzo</td>
                <td>95.59</td>
                <td>T</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>S18_4600</td>
                <td>1904s Ford truck</td>
                <td>84.76</td>
                <td>T</td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th class="table-dark" colspan="3">
                    <div class="text-center">Total</div>
                </th>
                <th class="table-active" colspan="2">
                    <div class="text-center">ราคาทั้งหมดจ้า</div>
                </th>
            </tr>
        </thead>
    </table>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"><button type="button" class="btn btn-lg btn-block" style="background-color:#FF9900">BUY</button></div>
        
        </div>
    </div>
</div>

@endsection