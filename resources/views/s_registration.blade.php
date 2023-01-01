@extends('layouts.students')
@section('content')
<head> <title>Self-registration</title> </head>

<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/liststyle.css')}}">

<div class ="listbox">
<h1> All Units </h1>
<table border="1">
    
    
    <tr>
 <td> Unit ID </td>
 <td>  Unit name </td>
 
 
 </tr>
 @foreach ($units as $unit)

<tr>
 <td>{{$unit->unit_no }}</td>
 <td>{{$unit->proname }}</td>
 <td><form action="addunit" method="post">
    @csrf
    <input type="hidden" name="unit_no" value={{$unit->unit_no}}>
    <button>Add unit</button>
</form></td>
 
</tr>
@endforeach


</table>
</div>




<div class ="listbox">
    <h1> Units Chosen </h1>
    <table border="1">
        
        
        <tr>
     <td> Unit ID </td>
     <td>  Unit name </td>
     
     
     </tr>
     @foreach ($carts as $cart)
    
    <tr>
     <td>{{$cart->unit_no }}</td>
     <td>{{$unit->proname }}</td>
     <td>
        <a href="/removecart/{{$item->cart_no}}">Remove </a>
        </td>
     
    </tr>
    @endforeach
    
    
    </table>
    </div>



@section('content')
@endsection