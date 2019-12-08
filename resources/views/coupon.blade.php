@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Coupon</h2>
    <hr>
    <br>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="text-align:center;">Code</th>
                <th scope="col" style="text-align:center;">Discount</th>
                <th scope="col" style="text-align:center;">times</th>
                <th scope="col" style="text-align:center;">Expire Date</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($customers as $customer)
                    {{$customer->customerNumber}}
            @endforeach --}}

            @foreach ($coupons as $coupon)
            <tr>
                <td style="text-align:center;"> {{$coupon->code}} </td>
                <td style="text-align:center;"> {{$coupon->money()}} </td>
                <td style="text-align:center;"> {{$coupon->times}}</td>
                <td style="text-align:center;">{{$coupon->expireDate}}</td>
            </tr>
            @endforeach
            <div style="text-align:end">
                <a href="{{route('coupon.add') }}" class="btn btn-lg" style="background-color: #FF9900;">Add Coupon </a>
            </div>
            <br>
        </tbody>
    </table>
</div>
@endsection