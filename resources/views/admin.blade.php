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

            @if($employee->sales() === "Sale")
            <br><br>
            <div style="text-align: center">
                <a href="{{route('admin.mant.product')}}" class="btn btn-lg " style="background-color: #FF9900;"> go to
                    manage Product</a>
            </div>
            @elseif($employee->jobTitle ==="VP Marketing")
            <h2> hey I'm VP marketting</h2>
            @endif


            <br>
            <div style="text-align: center">
                <a href="/admin/status" class="btn btn-lg " style="background-color: #FF9900;"> Product
                    Order </a>
                <a href="/admin/manage" class="btn btn-lg " style="background-color: #FF9900;"> Manage Customer </a>

                @if($employee->Manager() === "Sales Manager" || $employee->jobTitle ==="VP Sales"|| $employee->jobTitle
                ==="Sale Manager")
                <a href="{{route('admin.erm',$employee->employeeNumber) }}" class="btn btn-lg"
                    style="background-color: #FF9900;">Employee Resource Management </a>

                @elseif($employee->jobTitle ==="VP Marketing")
                <a href="{{route('status') }}" class="btn btn-lg " style="background-color: #FF9900;"> Create Coupon
                </a>
                @endif
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection