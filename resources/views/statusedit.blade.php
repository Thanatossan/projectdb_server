@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
            @foreach ($orders as $order)
            <h2 style="color: #FF9900">ADD ORDER NUMBER {{$order->orderNumber}}</h2>
            {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif --}}
            {{-- <form  method="post" action="{{action('OrdersController@update',$orderNumber)}}"> --}}
            <form method="post" action="
            {{action('OrdersController@update', $orderNumber)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                <h4 style="color: #FF9900">
                     @foreach ($customers as $customer)
                        @if($customer->customerNumber === $order->customerNumber)
                            {{$customer->customerName}} (Customer Number : {{$customer->customerNumber}})
                        @endif    
                    @endforeach
                </h4>
                <br>
                <label>Shipped Date</label>
                <input type="date" name="shippedDate" class="form-control" value="{{$order->shippedDate}}"><br>
                <label>Status : </label>
                <td style="text-align:center;">
                    <form class="form-control">
                        <select name="status">
                            <option value="default">{{$order->status}}</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="disputed">Disputed</option>
                            <option value="in-process">In process</option>
                            <option value="on-hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="shipped">Shipped</option>
                        </select>
                    </form>  
                </td>
                <label>Comments</label>
                <textarea name="comments" id="" cols="30" rows="10" class="form-control">{{$order->comments}}</textarea>
                <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <input type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900" value="Save" />
                </div>
            </div>
            </form>
            @endforeach
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection
