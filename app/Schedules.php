<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedules extends Model
{
    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
