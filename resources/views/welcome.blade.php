<<<<<<< HEAD
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
          <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="200" width="200" style="background-color:black;">
          <div class="sort">
            <h1>Sort by</h1>
            <div class="button-group sort-by-button-group">
              <button class="btn btn-primary button is-checked" data-sort-value="name">Vendors</button>
              <button class="btn btn-info active" data-sort-value="number">Size</button>
=======
@extends('layouts.app')
@section('extra-css')
<!-- Styles -->
<style>
  .grid-item {
    width: 30%;
    padding: 10px;
    margin: 10px;
    color: white;
  }

  p {
    color: black;
    margin-top: -20px;
    text-align: end
  }


  img {
    display: block;

  }
</style>
@endsection

@section('content')

<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="200" width="200"
        style="background-color:black;">
      <div class="sort">
        <h1>Sort by</h1>
        <div class="button-group sort-by-button-group">
          <button class="btn btn-info active" data-sort-value="number">Size</button>
        </div>
        <h1> Fillter </h1>
        <h3> Vendor</h3>
        <div class="filters">

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vendor
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-filter-group="vendor">
              <button class="dropdown-item" data-filter="">any</button>
              <button class="dropdown-item" data-filter=".AutoartStudioDesign">Autoart Studio Design</button>
              <button class="dropdown-item" data-filter=".CarouselDiecastLegends">Carousel DieCast Legends</button>
              <button class="dropdown-item" data-filter=".ClassicMetalCreations">Classic Metal Creations</button>
              <button class="dropdown-item" data-filter=".ExotoDesigns">Exoto Designs</button>
              <button class="dropdown-item" data-filter=".GearboxCollectibles">Gearbox Collectibles</button>
              <button class="dropdown-item" data-filter=".Highway66MiniClassics">Highway 66 Mini Classics</button>
              <button class="dropdown-item" data-filter=".MinLinDiecast">Min Lin Diecast</button>
              <button class="dropdown-item" data-filter=".MotorCityArtClassics">Motor City Art Classics</button>
              <button class="dropdown-item" data-filter=".RedStartDiecast">Red Start Diecast</button>
              <button class="dropdown-item" data-filter=".SecondGearDiecast">Second Gear Diecast</button>
              <button class="dropdown-item" data-filter=".StudioMArtModels">Studio M Art Models</button>
              <button class="dropdown-item" data-filter=".UnimaxArtGalleries">Unimax Art Galleries</button>
>>>>>>> 8847d67ff7f5e732a07e13538c92562e24211ff8
            </div>
          </div>
          <h3> Size</h3>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Size
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-filter-group="scale">
              <button class="dropdown-item" data-filter="">any</button>
              <button class="dropdown-item" data-filter=".S10">1:10</button>
              <button class="dropdown-item" data-filter=".S12">1:12</button>
              <button class="dropdown-item" data-filter=".S18">1:18</button>
              <button class="dropdown-item" data-filter=".S24">1:24</button>
              <button class="dropdown-item" data-filter=".S32">1:32</button>
              <button class="dropdown-item" data-filter=".S50">1:50</button>
              <button class="dropdown-item" data-filter=".S72">1:72</button>
              <button class="dropdown-item" data-filter=".S700">1:700</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      <div class="grid">
        {{-- @foreach ($products as $product)
            <div class="grid-item MinLinDiecast S10">
              <div class="card">
                <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200"
        width="100" style="background-color:black">
        <div class="card-body">
          <p> {{$product->productName}}</p>
          <p class="name">{{ $product->productvendor}}</p>
          <p class="number"> {{$product->productScale}}</p>
          <p style="text-align:center"> {{$product->buyPrice}}</p>
          <a href="#" class="btn btn-light btn-block btn btn-outline-dark">
            add to cart
          </a>
        </div>
      </div>
    </div>
    @endforeach --}}
    <div class="grid-item MinLinDiecast S10">
      <div class="card">
        <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200" width="100"
          style="background-color:black">
        <div class="card-body">
          <p class="name" style="font-size: 10px;"">Min Lin Diecast</p>
          <p style=" text-align:center;font-size: 15px;"> 1969 Harley Davidson Ultimate Chopper</p>
          <p class="number" style="text-align:center;font-size: 13px;">1:10</p>

          <p> $ 10</p>
          <a href=" #" class="btn btn-light btn-block btn btn-outline-dark">
            add to cart
          </a>
        </div>
      </div>
<<<<<<< HEAD
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
      </script>
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
      <script>
        var $grid = $('.grid').isotope({
          itemSelector: '.grid-item',
          layoutMode: 'fitRows',
          getSortData: {
            name: '.name',
            number: function(itemElem) {
              var number = $(itemElem).find('.number').text();
              return parseInt(number.replace(number, function(x) {
                return x.substring(2);
              }));
            }
          }
        });
        // bind sort button click
        $('.sort-by-button-group').on('click', 'button', function() {
          var sortValue = $(this).attr('data-sort-value');
          $grid.isotope({
            sortBy: sortValue
          });
        });
      </script>

</body>

</html>
=======
    </div>
  </div>
</div>
</div>
@endsection
@section('js')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
  var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        getSortData: {
          number: function( itemElem ) {
          var number = $( itemElem ).find('.number').text();
          return parseInt( number.replace(number,function(x) {
            return x.substring(2);
          } ) );
          }
        }
      });

    // store filter for each group
    
      // bind sort button click 
    $('.sort-by-button-group').on( 'click', 'button', function() {
    var sortValue = $(this).attr('data-sort-value');
    $grid.isotope({ sortBy: sortValue });
    });

    var filters = {};

  $('.filters').on( 'click', '.dropdown-item', function( event ) {
    var $dropdown = $( event.currentTarget );
    // get group key
    var $dropdownMenu = $dropdown.parents('.dropdown-menu');
    var filterGroup = $dropdownMenu.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $dropdown.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    console.log(filterValue)
    $grid.isotope({ filter: filterValue });
});
// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}
//show selected at dropdown
$(".dropdown-menu button").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>
@endsection
>>>>>>> 8847d67ff7f5e732a07e13538c92562e24211ff8
