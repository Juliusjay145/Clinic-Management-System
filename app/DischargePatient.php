<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DischargePatient extends Model
{
    protected $fillable = ['pat_discharge_id','bed_days','charges'];
    protected $dates = ['created_at','updated_at'];
    protected $table = 'patients_discharge';
    protected $primaryKey = 'discharge_id';

    public function patient() {
        return $this->belongsTo('App\Patients', 'pat_discharge_id', 'patients_id');
    }
}
