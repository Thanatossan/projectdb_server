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

<<<<<<< HEAD
@section('content')
<br><br><br>
<div class="container grid">
    <div class="container">
        <h1> Login as</h1>
=======
</head>
<body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container"> 
            <a class="navbar-brand" href="{{ url('/') }}"> Navbar logo</a>
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('loginchoose') }}">Login</a>

                {{-- <!--        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif  --> --}}
                    
                   @endauth
            @endif
            </div>
        </nav>
<!-- end of navbar -->
     <br><br><br>
      <div class="container grid"> 
          <div class="container">
          <h1> Login as</h1>
         </div>
         <br><br><br>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-warning" onclick = "window.location='{{ url('/login') }}'">Customer</button>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-warning" onclick = "window.location='{{ url('/admin/login') }}'">Employee</button>
>>>>>>> 08338434a2ea4b3b0f2e9be4d0d4671a613a3a5e
    </div>
    <br><br><br>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-light"
        onclick="window.location='{{ url('/admin/login') }}'">Employee</button>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-light"
        onclick="window.location='{{ url('/login') }}'"> Customer</button>
</div>
@endsection