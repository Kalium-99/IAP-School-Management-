<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    //

    function show(){
        $attend= Attendance::all();
        return view ('studattendance', ['attendances' => $attend]);
      }
}
