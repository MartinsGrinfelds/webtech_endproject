<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Review;

class ReviewController extends Controller
{
   public function show($id) {
       
     $review = Review::where('id',$id)->firstOrFail();  
      
      /** if (!$review) {
           abort(404);
           
       }
       **/
       
       return view('helloworld', ['review' => $review]);
       
   }
}
