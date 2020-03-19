<?php

namespace App\Providers;
use App\Doctors;
use Illuminate\Support\ServiceProvider;
class DynamicDoctorsname extends ServiceProvider
{
    
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('doctors_array', Doctors::all()); //array which is use to store all data table data
        });
    }

}
