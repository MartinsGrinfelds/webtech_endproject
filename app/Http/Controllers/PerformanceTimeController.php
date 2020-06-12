<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceTimeController extends Controller
{
    //
     public function index()
    {
        return view('performance_times');
    }
     public function create()
    {
        return view('performance_times.create');
    }
}
