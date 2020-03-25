<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedules extends Model
{
    protected $fillable = ['doctors_schedule_id', 'name','task_description', 'task_date'];

    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
