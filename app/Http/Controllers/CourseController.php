<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
     
     function show ()
     {
         $data = Course::all();
         return view('list',['courses'=> $data]);
}
}