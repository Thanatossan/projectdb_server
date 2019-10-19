@extends('layouts.app')

@section('content')
    <h1>Your customers ID is</h1>
    
    @foreach ($customers as $custom)
        <h3> {{$custom->customerName}} </h3>
    @endforeach
    
        
@endsection
