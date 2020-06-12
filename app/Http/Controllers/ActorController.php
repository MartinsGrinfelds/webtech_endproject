<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Actors;

class ActorController extends Controller
{
    //
     public function index()
    {
        return view('actors');
    }
}
