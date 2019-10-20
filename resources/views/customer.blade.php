@extends('layouts.app')

@section('content')
    <h1>Hello</h1>
    
    <p><h1>Welcome to ShopHUB!!!</h1> 
        @foreach ($customers as $custom)
        <h3>Business name: {{$custom->customerName}} </h3>
        <h3>Customer name: {{$custom->contactFirstName}} {{$custom->contactLastName}} </h3>
        @endforeach
    </p>
    
    
        
@endsection
