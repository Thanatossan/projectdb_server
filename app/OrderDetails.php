<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'orderdetails';
    
    public $primaryKEY = 'productCode';
}
