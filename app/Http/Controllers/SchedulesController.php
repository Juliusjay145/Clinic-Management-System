<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

class SchedulesController extends Controller
{
    public function medicinesmethod()
    {
        return view('docsappointment.medicines');
    }

    public function tasksmethod()
    {
        return view('docsappointment.calendartasks');
    }
}
