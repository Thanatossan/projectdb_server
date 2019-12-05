@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <h2 style="color: #FF9900">ADD CUSTOMER</h2>
            <form>
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter first name">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter last name">
                <label>Phone Number</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter phone number">
                <label>Company</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter company">
                <label for="inputAddress">Address 1</label>
                <input type="text" class="form-control" placeholder="1234 Main St">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState">
                    </div>
                    <div class="form-group col">
                        <label for="">Country</label>
                        <input type="text" class="form-control" id="inputCountry">
                    </div>
                    <div class="form-group col-2">
                        <label for="">Postal Code</label>
                        <input type="text" class="form-control" id="inputPostalCode">
                    </div>
                </div>
            </form>
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <button type="button" class="btn btn-md btn-block" style="background-color: #FF9900" href="">Submit</button>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

@endsection