<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fontpage.css') }}" />
   
    <title>Loginpath</title>

    <!-- style -->
    <style>
      .flex-center{
          align-items: center;
          display: flex;
          justify-centent: center;
      }
      .content{
          text-align:center;
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
    button{
        margin : 40px;

    }
    </style>


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
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-warning" onclick = "window.location='{{ url('/admin/login') }}'">Employee</button>
    <button type="button" class="btn btn-primary btn-lg btn-outline-dark btn-warning" onclick = "window.location='{{ url('/login') }}'"> Customer</button>
    </div>
</body>
</html>