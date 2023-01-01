<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    //

    function show(){
        $res= Result::all();
        return view ('results', ['results' => $res]);
      }


}
