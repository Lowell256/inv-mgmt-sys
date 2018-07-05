<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_tbl extends Model
{
    protected $table = "users_tbl";
    protected $primaryKey = "user_id";
    public $timestamps = false;
}
