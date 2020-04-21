<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = ['pat_diag_id','department','ward','bed_number'];
    protected $dates = ['created_at','updated_at'];
    protected $table = 'diagnoses';
    protected $primaryKey = 'diagnosis_id';

    public function patient() {
        return $this->belongsTo('App\Patients', 'pat_diag_id', 'patients_id');
    }
}
