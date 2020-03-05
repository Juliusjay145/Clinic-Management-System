<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $fillable = [
        'sched_name', 'start_date', 'end_date',
    ];
}
