@extends('layouts.app')

@section('extra-css')
<style>
    .flex-center {
        align-items: center;
        display: flex;
        justify-centent: center;
    }

    .content {
        text-align: center;
    }

    .grid {
        display: grid;
        grid-template-columns: [xl-start] 1fr 1.5rem [md-start] minmax(0, 624px) [md-end] 1.5rem 1fr [xl-end];
    }

    .grid * {
        grid-column: md;
    }

    .grid-xl {
        grid-column: xl;
    }

    button {
        margin: 40px;
    }

    .btn {
        padding: 30px;
    }
</style>
@endsection

@section('content')
<br><br><br>
<div class="container grid">
    <div class="container">
        <h1> Login as</h1>
    </div>
    <br><br><br>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-light"
        onclick="window.location='{{ url('/admin/login') }}'">Employee</button>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-light"
        onclick="window.location='{{ url('/login') }}'"> Customer</button>
</div>
@endsection