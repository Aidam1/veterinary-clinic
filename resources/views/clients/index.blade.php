@extends('layouts.layout')

@section('content')


  <h1> Home </h1>
  <form method="GET" action="clients\search">
    @csrf
  <label>
    Search: <br>
    <input type="text" name="search"> 
  </label>
  <br>
  
  <input type="submit" value="search"> 
</form>

@endsection