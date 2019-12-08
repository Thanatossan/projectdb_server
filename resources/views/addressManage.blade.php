@extends('layouts.app')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
        <form action="/admin/addresses" method="POST">
            {{csrf_field()}}
            <div class="panel pannel-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

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
                            <th><a href="#" class="addRow btn btn-info"><i class="glyphicon glyphicon-plus">+</i></a></th>
                        </tr>
                        @foreach($addresses as $row)
                        <tr id="check" class="Row">
                            <td>{{$row->addressLine1}}</td>
                            <td>{{$row->addressLine2}}</td>
                            <td>{{$row->city}}</td>
                            <td>{{$row->state}}</td>
                            <td>{{$row->country}}</td>
                            <td>{{$row->postalCode}}</td>
                            <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">delete</i></a></td>
                        </tr>
                        @endforeach
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="addressline1[]" class="form-control" required=""></td>
                            <td><input type="text" name="addressline2[]" class="form-control" ></td>
                            <td><input type="text" name="city[]" class="form-control" required=""></td>    
                            <td><input type="text" name="state[]" class="form-control" ></td>
                            <td><input type="text" name="country[]" class="form-control" required=""></td>
                            <td><input type="text" name="postalcode[]" class="form-control"></td>
                            <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">delete</i></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div>
    <script type="text/javascript">
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="addressline1[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="addressline2[]" class="form-control" ></td>'+
        '<td><input type="text" name="city[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="state[]" class="form-control quantity"></td>'+
        '<td><input type="text" name="country[]" class="form-control budget" required=""></td>'+
        '<td><input type="text" name="postalcode[]" class="form-control amount"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">delete</i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };

    
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
            if(confirm('Do you want to delete your address?')==true)
            {
                $(this).parent().parent().remove();
            }
        }
    });
</script>
@endsection