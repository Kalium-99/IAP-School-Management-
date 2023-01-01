@extends('layouts.students')
<head> <title>Exam results</title> </head>


<div class="rest">
    
    <head>
        <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">

<div class ="listbox">
<h1> Unit Marks </h1>
<table border="1">
    
    
    <tr>
 <td> Exam Name</td>    
 <td> Grade</td>
 

 </tr>

 @foreach ($results as $result)

<tr>
    <td>{{$result['exam_id']}}</td> 
 <td> {{$result['grade']}} </td>
 
 
</tr>
@endforeach


</table>
</div>



</div>


@section('content')


    
@endsection