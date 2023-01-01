@extends('layouts.students')
<head> <title>Student Coursework</title> </head>

@section('content')
<head>
    <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">

<div class ="listbox">
<h1> Coursework</h1>
<table border="1">


<tr>
<td>  </td>

</tr>

@foreach ($courseworks as $coursework)

<tr>
<td><h2>{{$coursework['title']}}</h2>
    <h3> {{$coursework['description']}}</h3>      
         <h5> {{$coursework['deadline']}}</h5>

</td>
<td> <a href="/viewcoursework/{{$item->coursework_no}}">View </a></td>
</td>


</tr>
@endforeach


</table>
</div>



</div>
@section('content')
@endsection