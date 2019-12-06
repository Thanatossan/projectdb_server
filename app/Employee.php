<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Table Name
    protected $table = 'employees';

    public $primaryKey = 'employeeNumber';
    
    public function sales(){
        $check_str = strstr($this->jobTitle, "Sale");
        $Sales = substr($check_str,0,4);
        return $Sales;
    }
    public function Manager(){
        $manager = substr($this->jobTitle,0,13);
        return $manager;
    }
}
