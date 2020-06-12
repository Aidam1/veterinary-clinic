@extends('layouts.layout')

@section('content')

    <p><strong>{{$pet->name}}</strong></p>
    <p>Breed: {{$pet->breed}}</p>
    <p>Age: {{$pet->age}}</p>
    <p>Weight: {{$pet->weigth}}</p>
    <a href="{{route('pets.edit', [$pet->id])}}">Edit</a>
    <img style='max-height: 150px' src="/images/pets/{{$pet->image}}" alt="{{$pet->name}}">
@endsection