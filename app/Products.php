<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    
    public $primaryKEY = 'productCode';



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
    public function product_line(){
        $productline = preg_replace('/\s/','',$this->productLine);
        return $productline;
    }
}


