<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = ['symptoms'];
    protected $dates = ['created_at','updated_at'];
}
