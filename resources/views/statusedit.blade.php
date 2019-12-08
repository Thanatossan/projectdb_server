@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
            @foreach ($orders as $order)
            <form  method="POST" action="statusedit{{{$orderNumber}}}">
            <h2 style="color: #FF9900">ADD ORDER<br></h2>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif
            
                    
            {{-- <form method="POST" action="/status"> --}}
                @csrf
                
                <h4 style="color: #FF9900">
                     @foreach ($customers as $customer)
                        @if($customer->customerNumber === $order->customerNumber)
                            {{$customer->customerName}} 
                            <input type="integer" name="customerNumber" class="form-control" value="{{$customer->customerNumber}}" readonly="readonly">
                        @endif    
                    @endforeach
                </h4>

                <label>Order Number</label>
                <input type="integer" name="orderNumber" class="form-control" value="{{$order->orderNumber}}" readonly="readonly">
                <br>
                <label>Order Date</label>
                <input type="date" name="orderDate" class="form-control" value="{{$order->orderDate}}" readonly="readonly">
                <label>Required Date</label>
                <input type="date" name="requiredDate" class="form-control" value="{{$order->requiredDate}}" readonly="readonly">
                <br>
                <label>Shipped Date</label>
                
                <input type="date" name="shippedDate" class="form-control" value="{{$order->shippedDate}}"><br>
                <label>Status : </label>
                <td style="text-align:center;">
                        <select name="status">
                            <option value="default">{{$order->status}}</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="disputed">Disputed</option>
                            <option value="in-process">In process</option>
                            <option value="on-hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="shipped">Shipped</option>
                        </select> 
                    
                </td>
                <br><br>
                <label>Comments</label>
                <textarea name="comments" id="" cols="30" rows="10" class="form-control">{{$order->comments}}</textarea>
                <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                        <input type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900" value="update" /> 
                </div>
            </div>
            @endforeach
            </form>
           
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection
