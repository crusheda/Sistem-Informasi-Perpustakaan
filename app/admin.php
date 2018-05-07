<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "users";
    public $primaryKey = "id";
    public $timestamps = true;
}
