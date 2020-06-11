<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformancesController extends Controller
{
    //
    public function show($id) {
       
     $review = Review::where('id',$id)->firstOrFail();  
      
      /** if (!$review) {
           abort(404);
           
       }
       **/
       
       return view('helloworld', ['review' => $review]);
       
   }
}
