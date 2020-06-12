@extends('layouts.layout')

@section('content')

@foreach ($clients as $client)
<div class="client">
<p>{{$client->first_name}} {{ $client->last_name }}</p>
<a href="{{route('clients.show', [$client->id])}}">See details</a>
<p>Pets:</p>
  @foreach ($client->pets as $pet)
    <p><strong>{{$pet->name}}</strong></p>
    <p>Breed: {{$pet->breed}}</p>
    <p>Age: {{$pet->age}}</p>
    <p>Weight: {{$pet->weigth}}</p>
    <img style='max-height: 150px' src="/images/pets/{{$pet->image}}" alt="{{$pet->name}}">
  @endforeach
</div>
<hr>
  

@endforeach


@endsection