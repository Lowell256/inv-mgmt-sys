<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers_tbl extends Model
{
    protected $table = "suppliers_tbl";
    protected $primaryKey = "supplier_id";
    public $timestamps = true;
}
