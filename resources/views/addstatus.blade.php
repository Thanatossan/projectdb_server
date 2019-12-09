@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <h2 style="color: #FF9900">ADD ORDER</h2>
            <form action="addstatus" method="POST">
            @csrf
                <label>Customer Name</label>
                <input type="text" name="customerName" class="form-control" aria-describedby="emailHelp" placeholder="Enter company">

                 <label>Order Date</label>
                <input type="date" name="orderDate" class="form-control" value="<?php echo date('Y-m-d');?>" readonly="readonly">
                <label>Shipping Date</label>
                <input type="date" name="requiredDate" class="form-control">
                <label>Order List</label>
                <table>
                    <tbody>
                        <tr>
                            <td><input type="text" name="productCode" class="form-control" placeholder="Enter Product Code . . ."></td>
                            <td><input type="integer" name="quantityOrdered" class="form-control" placeholder="Enter Quantity . . ."></td>
                            <td><input type="double" name="priceEach" class="form-control" placeholder="Enter Each price . . . "></td>

                            <td><a href="#" class="btn btn-info addRow" style="background-color: #FF9900">+</a><br></td>
                        </tr>
                    </tbody>
                </table>
                <label>Comments</label>
                <textarea name="comments" id="" cols="30" rows="10" class="form-control"></textarea>
                <label>Coupon</label>
                <input type="text" name="code" class="form-control" placeholder="Enter coupon">
                <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-block btn-lg" style="background-color: #FF9900">Submit</button>
                </div>
            </div>
            </form>
            
        </div>
        <div class="col"></div>
    </div>
</div>

<script type="text/javascript">
    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
        var tr =    '<tr>'+
                        '<td><input type="text" name="productCode" class="form-control" placeholder="Enter Product Code . . ."></td>'+
                        '<td><input type="integer" name="quantityOrdered" class="form-control" placeholder="Enter Quantity . . . "></td>'+
                        '<td><input type="float" name="priceEach" class="form-control" placeholder="Each price . . . "></td>'+
                        '<td><a href="#" class="btn btn-info remove" style="background-color: #FF9900">-</a><br></td></tr>';
            $('tbody').append(tr);
    };

    $('tbody').on('click','.remove',function(){
        $(this).parent().parent().remove();
    });


</script>
@endsection