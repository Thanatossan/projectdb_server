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

  .name {
    font-size: 13px;
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
          <button class="btn btn-info active" data-sort-value="name">Vendor</button>
          <button class="btn btn-info active" data-sort-value="random">random</button>
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
              <button class="dropdown-item" data-filter=".CarouselDieCastLegends">Carousel DieCast Legends</button>
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
        @foreach ($products as $product)
        <div class="grid-item {{$product->vendorName()}} {{$product->scale()}} S10">
          <div class="card">
            <img class="card-img-top" src="{{URL::asset('/asset/logo.png')}}" alt="product pic" height="200" width="100"
              style="background-color:black">
            <div class="card-body">
              <p> {{$product->productName}}</p>
              <p class="name">{{ $product->productVendor}}</p>
              <p class="number">{{$product->productScale}}</p>
              <p style="text-align:center"> {{$product->money()}}</p>
              <a href="{{ route('shop.detail') }}" class="btn btn-light btn-block btn btn-outline-dark">
                add to cart
              </a>
            </div>
          </div>
        </div>
        @endforeach

        @endsection
        @section('js')
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script>
          var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        getSortData: {
          name: function(itemElem){
            var name =$(itemElem).find('.name').text();
            return name.replace(name,function(x){
              return x
            });
          },
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