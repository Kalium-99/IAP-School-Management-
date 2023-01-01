@extends('layouts.students')
@section('content')
<head> <title>Student Attendance</title>

</head>




<div class="rest">
    
        <head>
            <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">
    
    <div class ="listbox">
    <h1> Attendance list </h1>
    <table border="1">
        
        
        <tr>
     <td> Student Number</td>
     <td>  Status </td>     
     <td> Date</td>
     </tr>

     @foreach ($attendances as $attendance)
    
    <tr>
     <td>{{$attendance['student_no']}}</td>
     <td>{{$attendance['status']}}</td>
     <td> {{$attendance['date']}} </td>
     
     
    </tr>
    @endforeach
    
    
    </table>
    </div>
    
    

</div>

@section('content')



@endsection