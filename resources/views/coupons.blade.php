@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3">
            <form action="/coupons" method="post">
            @csrf
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Enter code">
                </div>
                <div class="form-group">
                    <label for="">Discount</label>
                    <input type="text" name="discount" placeholder="Enter discount" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Times</label>
                    <input type="text" name="times" placeholder="Enter times" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Expire date</label>
                    <input type="date" name="expireDate" placeholder="Enter expire date" class="form-control">
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg" style="background-color: #FF9900" action='/coupons'>Add Coupons</button>
                </div>
            </form>
        </div>
        <div class="col">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">DISCOUNT</th>
                        <th scope="col">TIMES</th>
                        <th scope="col">EXPRIE DATE</th>
                    </tr>
                </thead>
                @foreach ($coupon as $x)
                <tbody>
                    <tr>
                        <td>{{ $x->code }}</td>
                        <td>{{ $x->discount }}</td>
                        <td>{{ $x->times }}</td>
                        <td>{{ $x->expireDate}}</td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection