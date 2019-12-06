@extends('layouts.app')

@section('content')
@foreach($login_employee as $loginedEmployee)
<h2> {{$loginedEmployee -> employeeNumber}}</h2>
@foreach($employees as $employee)
<h2> {{$employee -> employeeNumber}}</h2>
@endforeach
@endforeach
@endsection