@extends('layouts.app')

@section('content')

@foreach ($products as $product)

<div class="container">
    <div class="row">
        <div class="col"><img class="img-thumbnail" src="{{URL::asset('/asset/'.$product->product_line().'.jpg')}}"
                alt="product" height="500" width="500">
        </div>
        <div class="col">
            <h1 style="color:#FF9900">{{$product -> productName}} {{$product -> productScale}}</h1>
            <p style="text-align:end">code: {{$product -> productCode}}</p>
            <br>
            <h3>Vendors : {{$product -> productVendor}}</h3>
            <br>
            <p> {{$product -> productDescription}}</p>
            <br><br>
            <h3> In stock : {{$product -> quantityInStock}}</h3>
            <h2 style="text-align: center"> Price :{{$product -> money()}}</h2>
            <br><br>
        </div>
    </div>

</div>
@endforeach

@endsection