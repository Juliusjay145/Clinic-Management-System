<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = ['user_id','last_name','first_name','profile_pic','phone_no','age','address','state','docs_username','docs_password'];
    protected $dates = ['created_at','updated_at'];
    protected $primaryKey = 'doctors_id';
    protected $table = 'doctors';

    public function schedules() {
        return $this->hasMany('App\Schedules');
    }
}