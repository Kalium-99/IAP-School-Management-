<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Course;
use App\Models\Student;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class UnitController extends Controller
{
    //

    function show(){
      $uni = DB::table('units')
      ->join('courses', 'courses.unit_no', '=', 'units.unit_no')
      ->select('courses.*', 'units.unitname as proname', 'units.unit_no')
      ->where('courses.course_no', '=' , '#')
      ->get();
  
      return view ('s_registration', ['units' => $uni]);

      }


      function select(){
        $units = DB::table('units')
    ->join('students', 'students.unit_no', '=', 'units.unit_no')
    ->select('students.*', 'units.unitname as proname' )
    ->where('students.student_no', '=' , 56)
    ->get();

    return view ('units', ['units' => $units]);
    }


    function addunit(Request $req){
      if ($req->session()->has('user'))
      {
      return"hello";
      $cart= new Cart;
      $cart->student_no=$req->session()->get('student')['student_no'];
      $cart->unit_no=$req->unit_no;
      $cart->save();
      return redirect('#');




    }
    else{
      return redirect('/login');
    }

    }

    static function cartItem()
    {
      $student_Id= Session::get('student')['student_no'];
      return Cart::where('student_no',$student_Id)->count();
    }

    function cartlist(){

      $student_no= Session::get('students')['student_no'];
      $chosen = DB::table('carts')
      ->join('units', 'units.unit_no', '=', 'carts.unit_no')
      ->select('units.*', 'carts.*' )
      ->where('units.student_no', '=' , $student_no)
      ->get();
  
      return view ('s_registration', ['carts' => $chosen]);
    }

    function removeCart($id)
    {
      Cart::destroy($id);
      return redirect('s_registration');
    }

    





}
