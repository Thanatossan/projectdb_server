@extends('layouts.app')

@section('content')

<div class="container">
    <h1>MANAGE CUSTOMER</h1>
    <div style="text-align:end">
        <a href="/admin/addcustomer" class="btn btn-lg" style="background-color: #FF9900;"> Add Customer</a>
    </div>
    <br>
    <table class=" table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CUSTOMER NUMBER</th>
                <th scope="col">CUSTOMER NAME</th>
                <th scope="col" colspan="2">CONTACT NAME</th>
                <th scope="col">PHONE NUMBER</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($customers as $customer)
        <tbody>
            <tr>
                <td>{{ $customer->customerNumber}}</td>
                <td>{{ $customer->customerName }}</td>
                <td>{{ $customer->contactFirstName}}</td>
                <td>{{ $customer->contactLastName}}</td>
                <td>{{ $customer->phone}}</td>
                <td><a href="{{action('AdminController@edit_customer',$customer-> customerNumber)}}"
                        class="btn btn-info edit"><i class="glyphicon glyphicon-remove">edit</i></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.remove').on('click',function(){
        var last=$('tbody tr').length;
        if(confirm('Do you want to delete your address?')==true)
        {
            $(this).parent().parent().remove();
        }
    });
</script>
@endsection