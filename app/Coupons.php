<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $table = 'coupons';

    public function money(){
        return money_format('$%i',$this->discount);
   }
}
