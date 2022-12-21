<html>
    <head>
        <link rel="stylesheet" href="{{asset('stylecss/liststyle.css')}}">

<div class ="listbox">
<h1> Course list </h1>
<table border="1">
    
    
    <tr>
 <td> Course ID </td>
 <td>  Course name </td>
 <td> Unit . </td>
 <td> Description </td>
 </tr>
 @foreach ($courses as $course)

<tr>
 <td>{{$course['course_no']}}</td>
 <td>{{$course['course_name']}}</td>
 <td> {{$course['unit_no']}} </td>
 <td> {{$course['description']}} </td>
 
</tr>
@endforeach


</table>
</div>

