@extends('layouts.students')


<head> <title>Units</title> </head>


<div class="rest">
    
    <head>
        <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">

<div class ="listbox">
<h1> My Units </h1>
<table border="1">
    
    
    <tr>
 <td> Unit No</td>    
 <td> Unit Name</td>
 

 </tr>

 @foreach ($units as $unit)

<tr>
    <td>{{$unit->unit_no}}</td> 
 <td> {{$unit ->proname}} </td>
 <td><a href="{{url('/studentattendance')}}?edit={{$unit->unit_no}}" id="button">Attendance</a></td>
 <td><a href="{{url('/studentcoursework')}}?edit={{$unit->unit_no}}" id="button">Coursework</a></td>
 <td><a href="{{url('/results')}}?edit={{$unit->unit_no}}" id="button">Exam Results</a></td>
 
 
</tr>
@endforeach


</table>
</div>



</div>

@section('content')



    
@endsection