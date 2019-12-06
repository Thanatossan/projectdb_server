@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <h2 style="color: #FF9900">ADD CUSTOMER</h2>
            <form action="/addcustomer" method="post">
            @csrf
                <label for="">Customer Number</label>
                <input type="text" id="customerNumber" class="form-control" placeholder="Enter customer num">
                <label>Customer Name</label>
                <input type="text" id="customerName" class="form-control" aria-describedby="emailHelp" placeholder="Enter company">
                <label>Contact First Name</label>
                <input type="text" id="contactFirstName" class="form-control" placeholder="Enter first name">
                <label>Contact Last Name</label>
                <input type="text" id="contackLastName" class="form-control" placeholder="Enter last name">
                <label>Phone Number</label>
                <input type="text" id="phoneNumber" class="form-control" aria-describedby="emailHelp" placeholder="Enter phone number">
                <label for="inputAddress">Address 1</label>
                <input type="text" id="address1" class="form-control" placeholder="1234 Main St">
                <label for="inputAddress2">Address 2</label>
                <input type="text" id="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputCity">City</label>
                        <input type="text" id="city" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="state">
                    </div>
                    <div class="form-group col">
                        <label for="">Country</label>
                        <input type="text" class="form-control" id="country">
                    </div>
                    <div class="form-group col-2">
                        <label for="">Postal Code</label>
                        <input type="text" class="form-control" id="p ostalCode">
                    </div>
                </div>
            </form>
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- <input type="submit" name="Submit" value="Add" style="background-color: #FF9900"> -->
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->
@endsection