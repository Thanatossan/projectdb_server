@extends('layouts.app')

@section('content')

@foreach ($products as $product)

<div class="container">
    <div class="row">
        <div class="col"><img class="img-thumbnail"
                src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-cat-wearing-sunglasses-while-sitting-royalty-free-image-1571755145.jpg?crop=0.670xw:1.00xh;0.147xw,0&resize=480:*"
                alt="product">
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