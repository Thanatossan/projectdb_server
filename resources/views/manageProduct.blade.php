@extends('layouts.app')

@section('content')
<div class="container">
    <h1>MANAGE Product</h1>
    <h2 style="text-align:center"> Create </h2>
    <form action="{{action('AdminController@insert')}}" method="POST">
        @csrf
        <div class="form-row align-items-center">
            <div class="col-sm-5 my-1 mr-3">
                <label class="sr-only" for="inlineFormInputName">Name</label>
                <input type="text" class="form-control" name="productCode" placeholder="Product Code">
            </div>
            <div class="col-sm-5 my-1 mr-3">
                <label class="sr-only" for="inlineFormInputName">Name</label>
                <input type="text" class="form-control" name="productName" placeholder="Product Name">
            </div>
            <div class="col-sm-3 my-1 mr-3">
                <label class="sr-only" for="inlineFormInputName">Line</label>
                <input type="text" class="form-control" name="productLine" placeholder="Product Line">
            </div>
            <div class="col-sm-3 my-1 mr-3">
                <label class="sr-only" for="inlineFormInputName">Scale</label>
                <input type="text" class="form-control" name="productScale" placeholder="Product Scale">
            </div>
            <div class="col-sm-3 my-1 mr-3">
                <label class="sr-only" for="inlineFormInputName">Stock</label>
                <input type="text" class="form-control" name="quantityInStock" placeholder="Stock">
            </div>
            <div class="col-sm-3 my-1 mr-6">
                <label class="sr-only" for="inlineFormInputName">Price</label>
                <input type="text" class="form-control" name="buyPrice" placeholder="Price">
            </div>

            <div class="col-auto my-1 ">
                <button type="submit" class="btn" style="background-color: #FF9900">Create</button>
            </div>

        </div>
    </form>
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
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection