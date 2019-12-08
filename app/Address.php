<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable=['addressLine1', 'adressLine2', 'city', 'state', 'postalCode', 'country'];

}
