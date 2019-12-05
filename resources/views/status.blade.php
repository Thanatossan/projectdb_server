@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CUSTOMER STATUS</h1>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="text-align:center;">Order Number</th>
                <th scope="col" style="text-align:center;">Customer Number</th>
                <th scope="col" style="text-align:center;">Customer Name</th>
                <th scope="col" style="text-align:center;">Shipped Date</th>
                <th scope="col" style="text-align:center;">Status</th>
                <th scope="col" style="text-align:center;">Comments</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($customers as $customer)
                {{$customer->customerNumber}}
            @endforeach --}}

            @foreach ($orders as $order)
                <tr>
                    <td style="text-align:center;"> {{$order->orderNumber}} </td>
                    <td style="text-align:center;"> {{$order->customerNumber}} </td>
                    <td style="text-align:center;"> 
                        @foreach ($customers as $customer)
                            @if($customer->customerNumber === $order->customerNumber)
                                {{$customer->customerName}}
                            @endif    
                        @endforeach
                    </td>
                    <td style="text-align:center;"> <input type="date" value="{{$order->shippedDate}}"></td>
                    <td style="text-align:center;"><form>
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
                    <td style="text-align:center;"><textarea name="comments" id="" cols="30" rows="3">{{$order->comments}}</textarea></td>
                </tr>
            @endforeach


        </tbody>
    </table>
    
</div>

@endsection