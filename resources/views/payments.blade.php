@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <h2 style="color: #FF9900">PAYMENTS</h2>
            @foreach ($orders as $order)
            <form action="/admin/payments/{{{$order->orderNumber}}}" method="POST">
            @csrf
            
                <label for="">Customer Number </label>
                <input type="integer" name="customerNumber" class="form-control" value="{{$order->customerNumber}}" readonly="readonly">
            
                <label>Check Number</label>
                <input type="text" name="checkNumber" class="form-control"  placeholder="Enter check number">
                <label>Payment Date</label>
                <input type="date" name="paymentDate" class="form-control" placeholder="date">
                <label>amount</label>
                <input type="float" name="amount" class="form-control" placeholder="Enter amount">
                <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900">Submit</button>
                </div>
            </div>
            </form>
            @endforeach
            
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection
