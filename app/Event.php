<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'doctors_events_id','event_name', 'start_date', 'end_date',
    ];
}
