@extends('layouts.students')
<head> <title>Student Coursework</title> 

    <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">
</head>

@section('content')



 

<div class="listbox">
<form action="upload" method="post">
    @csrf
    @foreach ($courseworks as $coursework)


    <<h2>{{$coursework['title']}}</h2>
        <h3> {{$coursework['description']}}</h3>      
             <h5>{{$coursework['deadline']}}</h5>
    
    
    
    @endforeach

         <input type="file" name="submission"><br><br>
         <button type="submit">Upload file</button>

        
</form>     
</div>


@section('content')
@endsection




