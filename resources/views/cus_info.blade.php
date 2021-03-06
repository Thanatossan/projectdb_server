@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<div class="container">
    @if(Session::has('sucess'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @foreach($customer_tables as $customer_table)

    <div class="panel pannel-header">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                    <tr">
                        <td> Customer Number : {{$customer_table->customerNumber}}</td>
                        <br>
                        <td> Customer Name : {{$customer_table->customerName }}</td>
                        <br>
                        <td> Customer phone : {{ $customer_table->phone}}</td>
                        </tr>
                        <br>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-footer">
        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Conutry</th>
                    <th>Postal Code</th>
                </tr>
                @foreach($customers as $row)
                <form method="POST" class="delete_form"
                    action="{{action('AdminController@deleteAddress',$row->addressNumber,$row->customerNumber)}}">

                    {{csrf_field()}}
                    <tr class="Row">
                        <td>{{$row->addressLine1}}</td>
                        <td>{{$row->addressLine2}}</td>
                        <td>{{$row->city}}</td>
                        <td>{{$row->state}}</td>
                        <td>{{$row->country}}</td>
                        <td>{{$row->postalCode}}</td>

                        <td>
                            <input type="hidden" name"_method" value="DELETE" />
                            <button type="submit" name="" id="remove" class="btn btn-danger">Delete </button>
                        </td>
                </form>


                </tr> @endforeach
            </thead>
            <tbody>
                <form method="POST" action="{{action('AdminController@address',$customer_table->customerNumber)}}">
                    {{csrf_field()}}
                    <tr>
                        <td><input type="text" name="addressline1" class="form-control" required=""></td>
                        <td><input type="text" name="addressline2" class="form-control"></td>
                        <td><input type="text" name="city" class="form-control" required=""></td>
                        <td><input type="text" name="state" class="form-control"></td>
                        <td><input type="text" name="country" class="form-control" required=""></td>
                        <td><input type="text" name="postalcode" class="form-control"></td>
                        <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>

                    </tr>
            </tbody>
        </table>
    </div>
    </form>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        // if(last==1){
        //     alert("you can not remove last row");
        // }
        // else{
            if(confirm('Do you want to delete your address?')==true)
            {
                $(this).parent().parent().remove();
            }
        // }
    });
</script>
@endsection