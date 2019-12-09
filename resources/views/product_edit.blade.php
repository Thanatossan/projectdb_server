@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($products as $product)
    <form action="{{action('AdminController@updateProduct',$Product_num)}}" method="POST">
        @csrf
        @endforeach
        <h2> Edit product </h2>
        <div class="form-row">
            <div class="col-sm-2 my-1 mr-3">

                <input type="hidden" name="_methond" placeholder="Product Code" value="PATCH" />
            </div>
            <div class="col-sm-5 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Name</label>
                <input type="text" class="form-control" name="productName" placeholder="Product Name">
            </div>
            <div class="col-sm-2 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Scale</label>
                <input type="text" class="form-control" name="productScale" placeholder="Product Scale">
            </div>
            <div class="col-sm-5 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Vendor</label>
                <input type="text" class="form-control" name="productVendor" placeholder="Product Vendor">
            </div>
            <div class="col-sm-2 my-1 mr-2">
                <label class="" for="inlineFormInputName">Stock</label>
                <input type="text" class="form-control" name="quantityInStock" placeholder="Stock">
            </div>
            <div class="col-sm-2 my-1 mr-3">
                <label class="" for="inlineFormInputName">Price</label>
                <input type="text" class="form-control" name="buyPrice" placeholder="Price">
            </div>
        </div><br>
        <div class="row ">
            <div class="col"></div>
            <div class="col"><input type="submit" class="btn btn-block" style="background-color: #FF9900"
                    value="update" />
            </div>
            <div class="col"></div>
        </div>


    </form>
</div>
@endsection