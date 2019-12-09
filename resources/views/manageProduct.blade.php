@extends('layouts.app')

@section('content')
<div class="container">
    <h1>MANAGE Product</h1><br>
    <h2 style="text-align:center"> Create </h2>
    <form action="{{action('AdminController@insert')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-sm-2 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Code</label>
                <input type="text" class="form-control" name="productCode" placeholder="Product Code">
            </div>
            <div class="col-sm-5 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Name</label>
                <input type="text" class="form-control" name="productName" placeholder="Product Name">
            </div>
            <div class="col-sm-4 my-1 mr-3">
                <label class="" for="inlineFormInputName">Product Line</label>
                <input type="text" class="form-control" name="productLine" placeholder="Product Line">
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
            <div class="col"><button type="submit" class="btn btn-block" style="background-color: #FF9900">Create</button></div>
            <div class="col"></div>
        </div>


    </form>
    <br>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Product Code</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Line</th>
                <th scope="col">Product Scale</th>
                <th scope="col" colspan="2">Product Vendor</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col" colspan="2" style="text-align: center">Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($products as $product)
                <div>
                    <td>{{ $product->productCode}}</td>
                    <td>{{ $product->productName}}</td>
                    <td>{{ $product->productLine}}</td>
                    <td>{{ $product->productScale}}</td>
                    <td colspan=" 2">{{ $product->productVendor}}</td>
                    <td>{{ $product->quantityInStock}}</td>
                    <td>{{ $product->buyPrice}}</td>
                </div>
                <td>
                   <form method="POST" class="delete_form" action="{{action('AdminController@delete',$product->productCode)}}">
                        {{csrf_field()}}
                        <input type="hidden" name"_method" value="DALETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>

                   <!-- <a href="/manageProduct/{{{$product->productCode}}}" method="POST"><button type="submit" class="btn btn-danger">Delete</button></a> -->

                
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection