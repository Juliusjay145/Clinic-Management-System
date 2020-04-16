<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    protected $fillable = ['pat_pres_id','prescriptions','profilepic','usage','quantity'];
    protected $dates = ['created_at','updated_at'];
    protected $table = 'patient_prescriptions';
    protected $primaryKey = 'prescription_id';

    public function patient() {
        return $this->belongsTo('App\Patients', 'pat_pres_id', 'patients_id');
    }
}
