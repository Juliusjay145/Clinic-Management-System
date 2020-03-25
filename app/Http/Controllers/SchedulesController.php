<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedules;
class SchedulesController extends Controller
{

    public function index()
    {
        $tasks = Schedules::all();
        return view('tasks.index', compact('tasks'));
    }
    
    public function create()
    {
        $tasks = Schedules::all();
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        Schedules::create($request->all());
        return redirect()->route('tasks.index');
    }
}
