<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    //
       public function index() {
        return view('performances');
    }
    public function show($id) {
       
     $performance = Performance::where('id',$id)->firstOrFail();  
      
     
       
      return view('performances.show', ['review' => $review]);
    
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
