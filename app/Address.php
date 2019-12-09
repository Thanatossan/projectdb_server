<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['addressNumber','addressesLine1','addressLine2','city','state','country','postalCode'];
    protected $table = 'addresses';

    protected $primaryKey = 'addressNumber';
}
