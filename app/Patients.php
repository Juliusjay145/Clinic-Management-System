<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = ['doc_id','symptoms','firstname','lastname','profilepic','gender','bloodtype','birthday','age','addr','contactnum'];
    protected $dates = ['created_at','updated_at'];
    protected $table = 'patients';
    protected $primaryKey = 'patients_id';

    public function doctor() {
        return $this->belongsTo('App\Doctors', 'doc_id');
    }
}
