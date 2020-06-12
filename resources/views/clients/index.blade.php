@extends('layouts.layout')

@section('content')

  <div class="home">
    
  <h1> Veterinary-Clinic </h1>
  <form method="GET" action="clients\search">
    @csrf
  <label>
    Search: <br>
    <input type="text" name="search"> 
  </label>
  <br>
  
  <input type="submit" value="search"> 
</form>
</div>

@endsection