@extends('layouts.layout')

@section('content')


<p><strong>{{ $client->first_name}} {{$client->last_name}}</strong> </p>
<a href="{{route('clients.edit', [$client->id])}}">Edit</a>
<p>Address: {{$client->address}}</p>
<p>Email: {{$client->email}}</p>
<p>Phone number: {{$client->phone_number}}</p>
<hr>
 @foreach ($client->pets as $pet)
 <a href="{{route('pets.edit', [$pet->id])}}">Edit</a>
    <p><strong>{{$pet->name}}</strong></p>
    <p>Breed: {{$pet->breed}}</p>
    <p>Age: {{$pet->age}}</p>
    <p>Weight: {{$pet->weigth}}</p>
    <img style='max-height: 150px' src="/images/pets/{{$pet->image}}" alt="{{$pet->name}}">
  @endforeach

@endsection