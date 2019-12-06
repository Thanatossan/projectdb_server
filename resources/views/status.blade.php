@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CUSTOMER STATUS</h1>
    {{-- href="{{ route('addstatus') }}" --}}
    <div  style="text-align:right;" > <a href="/addstatus"><button type="submit" class="btn btn-lg" style="background-color: #FF9900">Add New Order </button> </a></div><br>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="text-align:center;">Order Number</th>
                <th scope="col" style="text-align:center;">Customer Number</th>
                <th scope="col" style="text-align:center;">Customer Name</th>
                <th scope="col" style="text-align:center;">Shipped Date</th>
                <th scope="col" style="text-align:center;">Status</th>
                <th scope="col" style="text-align:center;">Comments</th>
                <th scope="col" style="text-align:center;"></th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($customers as $customer)
                {{$customer->customerNumber}}
            @endforeach --}}

            @foreach ($orders as $order)
                <tr>
                    <td style="text-align:center;" width="10%"> {{$order->orderNumber}} </td>
                    <td style="text-align:center;" width="10%"> {{$order->customerNumber}} </td>
                    <td style="text-align:center;" width="30%"> 
                        @foreach ($customers as $customer)
                            @if($customer->customerNumber === $order->customerNumber)
                                {{$customer->customerName}}
                            @endif    
                        @endforeach
                    </td>
                    <td style="text-align:center;" width="10%"> {{$order->shippedDate}}</td>
                    <td style="text-align:center;" width="10%"><form>
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
                    <td style="text-align:center;" width="30%">{{$order->comments}}</td>
                    <td style="text-align:center;">Edit</td>
                </tr>
            @endforeach


        </tbody>
    </table>
    
</div>

@endsection