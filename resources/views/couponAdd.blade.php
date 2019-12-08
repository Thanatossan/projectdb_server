@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{action('AdminController@addCoupon')}}" method="POST">
        @csrf
        <label>Code</label>
        <input type="text" name="code" class="form-control" placeholder="Enter Coupon Code">
        <label>Expire Date</label>
        <input type="date" name="expireDate" class="form-control">
        <label>Discount</label>
        <input type="text" name="discount" class="form-control" placeholder="Enter Discount"></td>
        <lavel> Times </lavel>
        <input type="text" name="times" class="form-control" placeholder="Enter amount of time"></td>
        </table>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900">Add Coupon</button>
            </div>
        </div>
    </form>
</div>

@endsection