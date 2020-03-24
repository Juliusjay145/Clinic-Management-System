<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\ServiceProvider;
class DynamicDoctorsname extends ServiceProvider
{
    
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('doctors_array', User::all()); //array which is use to store all data table data
        });
    }

}
