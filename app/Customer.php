<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Table Name
    protected $table = 'customers';
    public $primaryKey = 'customerNumber';
}
