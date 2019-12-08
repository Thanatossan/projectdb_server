@extends('layouts.app')
@section('content')

<div class="container">
    @csrf
    @foreach ($login_employee as $login)
    <h2> {{$login->jobTitle}}</h2>
    @endforeach
    <h3> Promote/Demote Employee </h3>
    <hr>
    @foreach($employees as $employee)
    <form method="POST" action="{{action('AdminController@promote',$employee_num)}}">
        {{ csrf_field() }}
        <h2> Name : {{$employee -> firstName}} {{$employee -> lastName}}</h2>
        <h2> Current Job Title : {{$employee -> jobTitle}}</h2>
        <div class="row">
            <h4> Promote / Demote to :</h4>
            <div class="col">
                <br>
                <select name="job" class="offset-md-3">
                    <option value="default">{{$employee->jobTitle}}</option>
                    <option value="Sale Manager">Sales Manager</option>
                    <option value="Sales Rep">Sales Rep</option>
                </select><br><br>
            </div>
        </div>
        <input type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900" value="update" />
    </form>
    @endforeach
</div>

@endsection