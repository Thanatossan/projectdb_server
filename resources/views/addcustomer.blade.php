@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <h2 style="color: #FF9900">ADD CUSTOMER</h2>
            <form action="/addcustomer" method="POST">
            @csrf
                <label for="">Customer Number</label>
                <input type="text" name="customerNumber" class="form-control" placeholder="Enter customer num">
                <label>Customer Name</label>
                <input type="text" name="customerName" class="form-control" aria-describedby="emailHelp" placeholder="Enter company">
                <label>Contact First Name</label>
                <input type="text" name="contactFirstName" class="form-control" placeholder="Enter first name">
                <label>Contact Last Name</label>
                <input type="text" name="contactLastName" class="form-control" placeholder="Enter last name">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter phone number">
                <label for="inputAddress">Address 1</label>
                <input type="text" name="addressLine1" class="form-control" placeholder="1234 Main St">
                <label for="inputAddress2">Address 2</label>
                <input type="text" naem="addressLine2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" name="state">
                    </div>
                    <div class="form-group col">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                    <div class="form-group col-2">
                        <label for="">Postal Code</label>
                        <input type="text" class="form-control" name="postalCode">
                    </div>
                </div>
                <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900">Submit</button>
                </div>
            </div>
            </form>
            
        </div>
        <div class="col"></div>
    </div>
</div>

@endsection