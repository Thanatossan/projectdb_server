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
      width: 30%;
      padding: 10px;
      margin: 10px;
      color: white;
    }

    p {
      color: black;
      margin-top: -10px;
      text-align: end
    }

    a {
      margin-top: -8px;
    }

    img {
      display: block;

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
            <h1> Vendors </h1>
            <select class="filters-select" data-filter-group="vendor">
              <option value="*">show all </option>
              <option value="Aut">Autoart Studio Design</option>
              <option value="Car">Carousel DieCast Legends</option>
              <option value="Cla">
                Classic Metal Creations</option>
              <option value="Exo">Exoto Designs</option>
              <option value="Gea">Gearbox Collectibles</option>
              <option value="Hig">
                Highway 66 Mini Classics</option>
              <option value="Min">Min Lin Diecast</option>
              <option value="Mot">
                Motor City Art Classics</option>
              <option value="Red">
                Red Start Diecast</option>
              <option value="Sec">Second Gear Diecast</option>
              <option value="Stu">
                Studio M Art Models</option>
              <option value="Uni">
                Unimax Art Galleries</option>
              <option value="Wel">
                Welly Diecast Productions</option>
            </select>
            <br>
            <h1> Scale </h1>
            <select class="filters-select" data-filter-group="scale">
              <option value="*">show all </option>
              <option value="Scale10">1:10</option>
              <option value="Scale12">1:12</option>
              <option value="Scale18">
                1:18</option>
              <option value="Scale24">1:24</option>
              <option value="Scale32">1:32</option>
              <option value="Scale50">
                1:50</option>
              <option value="Scale72">1:72</option>
              <option value="Scale700">
                1:700</option>
            </select>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div class="grid">
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 1969 Harley Davidson Ultimate Chopper</p>
                  <p class="name">Min Lin Diecast</p>
                  <p class="number">1:10</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 1952 Alpine Renault 1300</p>
                  <p class="name">Classic Metal Creations</p>
                  <p class="number">1:11</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 1996 Moto Guzzi 1100i</p>
                  <p class="name">
                    Highway 66 Mini Classics</p>
                  <p class="number">1:14</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 2003 Harley-Davidson Eagle Drag Bike</p>
                  <p class="name">Red Start Diecast</p>
                  <p class="number">1:17</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 1972 Alfa Romeo GTA</p>
                  <p class="name">Motor City Art Classics</p>
                  <p class="number">1:5</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p>1962 LanciaA Delta 16V</p>
                  <p class="name">Second Gear Diecast</p>
                  <p class="number">1:2</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
                  width="100" style="background-color:black">
                <div class="card-body">
                  <p> 1968 Ford Mustang</p>
                  <p class="name">Autoart Studio Design</p>
                  <p class="number">1:1</p>
                  <p style="text-align:center"> buy 1 get 1</p>
                  <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
                    add to cart
                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>

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
          name: function(itemElem) {
            var name = $(itemElem).find('.name').text();
            return name.replace(name,function(x){
              return x.substring(0,1);
            })
          },
          number: function( itemElem ) {
          var number = $( itemElem ).find('.number').text();
          return parseInt( number.replace(number,function(x) {
            return x.substring(2);
          } ) );
          }
        }
      });
      var filterFns = {
        Aut: function() {
        var name = $(this).find('.name').text();
        return name.match( /Autoart Studio Design$/ );
        },
        Car: function() {
        var name = $(this).find('.name').text();
        return name.match( /Carousel DieCast Legends$/ );
        },
        Cla: function() {
        var name = $(this).find('.name').text();
        return name.match( /Classic Metal Creations$/ );
        },
        Exo: function() {
        var name = $(this).find('.name').text();
        return name.match( /Exoto Designs$/ );
        },
        Gea: function() {
        var name = $(this).find('.name').text();
        return name.match( /Gearbox Collectibles$/ );
        },
        Hig: function() {
        var name = $(this).find('.name').text();
        return name.match( /Highway 66 Mini Classics$/ );
        },
        Min: function() {
        var name = $(this).find('.name').text();
        return name.match( /Min Lin Diecast$/ );
        },
        Mot: function() {
        var name = $(this).find('.name').text();
        return name.match( /Motor City Art Classics$/ );
        },
        Red: function() {
        var name = $(this).find('.name').text();
        return name.match( /Red Start Diecast$/ );
        },
        Sec: function() {
        var name = $(this).find('.name').text();
        return name.match( /Second Gear Diecast$/ );
        },
        Stu: function() {
        var name = $(this).find('.name').text();
        return name.match( /Studio M Art Models$/ );
        },
        Uni: function() {
        var name = $(this).find('.name').text();
        return name.match( /Unimax Art Galleries$/ );
        },
        Wel: function() {
        var name = $(this).find('.name').text();
        return name.match( /Welly Diecast Productions$/ );
        },
        Scale10: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:10$/ );
        },
        Scale12: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:12$/ );
        },
        Scale18: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:18$/ );
        },
        Scale24: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:24$/ );
        },
        Scale32: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:32$/ );
        },
        Scale50: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:50$/ );
        },
        Scale72: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:72$/ );
        },
        Scale700: function() {
        var number = $(this).find('.number').text();
        return number.match( /1:700$/ );
        },
      };

    // store filter for each group
    
      // bind sort button click 
    $('.sort-by-button-group').on( 'click', 'button', function() {
    var sortValue = $(this).attr('data-sort-value');
    $grid.isotope({ sortBy: sortValue });
    });

    var filters = {};

    $('.filters-select').on('change', function() {
    // get filter value from option value
    var filterValue = this.value;
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
    });
    

    

      
      </script>

</body>

</html>