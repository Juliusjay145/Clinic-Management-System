<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['symptoms','firstname','lastname','profilepic','gender','bloodtype','birthday','age','addr','contactnum'];
    protected $dates = ['created_at','updated_at'];
}