@extends('layouts.layout')

@section('content')


  <h1> Home </h1>
  <form method="GET" action="clients\search">
    @csrf

  <br>
  
  <input type="submit" value="search"> 
</form>

@endsection