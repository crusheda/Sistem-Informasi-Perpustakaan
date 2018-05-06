<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    protected $table = "pengunjung";
    public $primaryKey = "id";
    public $timestamps = true;
}
