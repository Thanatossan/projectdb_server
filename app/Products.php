<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    public $primaryKey = 'productCode';
    public $incrementing = false;
    protected $fillable =['productCode','productName','productLine','productScale','productVendor','productDescription','quantityInStock','buyPrice','MSRP'];

    public function vendorName()
    {   $stripped = preg_replace('/\s/', '',$this->productVendor);
        return $stripped ;
    }
    public function scale()
    {   $stripped2 = str_replace("1:","S",$this->productScale);
        return $stripped2 ;
    }
    public function money(){
         return money_format('$%i',$this->buyPrice);
    }
}


