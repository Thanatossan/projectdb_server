@extends('layouts.app')
@section('content')

<div class="container">
    @csrf
    @foreach ($login_employee as $login)
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="{{URL::asset('/asset/logo.png')}}" alt="Profile Pic" class="img-thumbnail" height="100"
                    width="100" style="background-color: black;">
            </div>
            <div class="col-sm">
                <h5> Name : {{$login->firstName}} {{$login->lastName}} </h5>
                <h5> Email: {{$login->email}}</h5>
                <h5> Job Title: {{$login->jobTitle}}</h5>
            </div>

        </div>
    </div>
    <br>
    <br>
    <h2 style="text-align:center">Employee Resource Management</h2>
    <hr>
    @foreach($employees as $employee)
    <form method="POST" action="{{action('AdminController@promote',$employee_num)}}">
        {{ csrf_field() }}
        <h2> Name : {{$employee -> firstName}} {{$employee -> lastName}}</h2>
        <h4> Current Job Title : {{$employee -> jobTitle}}</h4>
        <div class="row">
            <h4 class="offset-md-1"> Promote / Demote to :</h4>
            <div class="col">
                <br>
                <select name="jobTitle" class="offset-md-2">
                    <option value="default">{{$employee->jobTitle}} (default) </option>
                    @if($login->VP() == "VP")
                    <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                    <option value="Sale Manager (EMEA)">Sales Manager (EMEA)</option>
                    <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                    <option value="Sales Rep">Sales Rep</option>
                    <option value="General Employee">General Employee</option>
                    @endif
                    @if($login->Manager() == "Manager")
                    <option value="Sales Rep">Sales Rep</option>
                    <option value="General Employee">General Employee</option>
                    @endif
                </select><br><br>
            </div>
        </div>
        <input type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900" value="update" />
    </form>
    @endforeach
</div>

@endsection