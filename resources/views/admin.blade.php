@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee Profile</div>


                <div class="card-body">
                    <!-- seesion -->
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- end of seesion -->
                    @foreach ($employees as $employee)
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail"
                                    height="300" width="300" style="background-color: black">
                            </div>
                            <div class="col-sm">
                                <h5> Name : {{$employee->firstName}} {{$employee->lastName}} </h5>
                                <h5> Email: {{$employee->email}}</h5>
                                <h5> Job Title: {{$employee->jobTitle}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @if($employee->Manager() === "Sales Manager" || $employee->jobTitle ==="VP Sales")
            <a href="{{route('admin.erm',$employee->employeeNumber) }}"> go to ERM </a>
            @endif
            @if($employee->sales() === "Sale")

            <br><br>
            <div class="container">
                <h1>MANAGE Product</h1>
                <h2 style="text-align:center"> Create </h2>
                <form>
                    <div class="form-row align-items-center">
                        <div class="col-sm-5 my-1 mr-3">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Product Code">
                        </div>
                        <div class="col-sm-5 my-1 mr-3">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Product Name">
                        </div>
                        <div class="col-sm-3 my-1 mr-3">
                            <label class="sr-only" for="inlineFormInputName">Line</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Product Line">
                        </div>
                        <div class="col-sm-3 my-1 mr-3">
                            <label class="sr-only" for="inlineFormInputName">Scale</label>
                            <input type="text" class="form-control" id="inlineFormInputName"
                                placeholder="Product Scale">
                        </div>
                        <div class="col-sm-3 my-1 mr-3">
                            <label class="sr-only" for="inlineFormInputName">Stock</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Stock">
                        </div>
                        <div class="col-sm-3 my-1 mr-6">
                            <label class="sr-only" for="inlineFormInputName">Price</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Price">
                        </div>

                        <div class="col-auto my-1 ">
                            <button type="submit" class="btn btn-success">Create</button>
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
                                <td colspan="2">{{ $product->productVendor}}</td>
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
            @elseif($employee->jobTitle ==="VP Marketing")
            <h2> hey I'm VP marketting</h2>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection