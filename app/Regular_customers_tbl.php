<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regular_customers_tbl extends Model
{
    protected $table = "regular_customers_tbl";
    protected $primaryKey = "regular_customer_id";
    public $timestamps = true;
}
