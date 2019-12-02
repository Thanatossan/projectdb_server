<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .grid-item {
      width: 25%;
      padding: 10px;
      margin: 10px;
      color: white;
      background: teal;
    }

    .vendor {
      background: teal;
    }
  </style>
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" height="50" width="50" style="background-color:black;">
                </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('loginchoose') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="200" width="200"
            style="background-color:black;">
          <div class="sort">
            <h1>Sort by</h1>
            <div class="button-group sort-by-button-group">
              <button class="btn btn-primary button is-checked" data-sort-value="name">Vendors</button>
              <button class="btn btn-info active" data-sort-value="number">Size</button>
            </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div class="grid">
            <div class="grid-item">
              <p class="name">S</p>
              <p class="number">1:11</p>
            </div>
            <div class="grid-item">
              <p class="name">A</p>
              <p class="number">1:18</p>
            </div>
            <div class="grid-item">
              <p class="name">L</p>
              <p class="number">1:10</p>
            </div>
            <div class="grid-item">
              <p class="name">K</p>
              <p class="number">1:6</p>
            </div>
            <div class="grid-item">
              <p class="name">P</p>
              <p class="number">1:7</p>
            </div>
            <div class="grid-item">
              <p class="name">B</p>
              <p class="number">1:10</p>
            </div>
            <div class="grid-item">
              <p class="name">D</p>
              <p class="number">1:14</p>
            </div>
            <div class="grid-item">
              <p class="name">C</p>
              <p class="number">1:2</p>
            </div>
          </div>
        </div>
        <!-- /.grid -->

        {{--</div>
  <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

  </div>
  <!-- /.container -->
  </div>
  </main> --}}
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
      </script>
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
      <script>
        var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        getSortData: {
          name:'.name',
          number: function( itemElem ) {
          var number = $( itemElem ).find('.number').text();
          return parseInt( number.replace(number,function(x) {
            return x.substring(2);
          } ) );
      }
        }
      });
      // bind sort button click
$('.sort-by-button-group').on( 'click', 'button', function() {
  var sortValue = $(this).attr('data-sort-value');
  $grid.isotope({ sortBy: sortValue });
});



      
      </script>

</body>

</html>