<?php

namespace App\Http\Controllers;

use App\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    //
       public function index() {
        $performances = Performance::all();
   
        return view('performances',['performances' =>$performances]);
    }
    public function show($id) {
       
     $performance = Performance::where('id',$id)->firstOrFail();  
      
      return view('performances.show', ['performance' => $performance]);
    
   }
      public function create() {
        return view('performances.create');
    }
       public function store() {
        return view('performances');
    }
       public function destroy() {
        return view('performances');
    }
    
}
