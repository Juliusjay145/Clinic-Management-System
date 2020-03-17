<?php

namespace App\Providers;
use App\Patients;
use Illuminate\Support\ServiceProvider;
class DynamicPatientsname extends ServiceProvider
{
    
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('patients_array', Patients::all()); //array which is use to store all data table data
        });
    }

}
