@extends('layouts.layout')

@section('content')

    <p><strong>{{$pet->name}}</strong></p>
    <a href="{{route('pets.edit', [$pet->id])}}">Edit</a>
    <a href="{{route('visits.create')}}">Add new record</a>
    <p>Breed: {{$pet->breed}}</p>
    <p>Age: {{$pet->age}}</p>
    <p>Weight: {{$pet->weigth}}</p>
    <img style='max-height: 150px' src="/images/pets/{{$pet->image}}" alt="{{$pet->name}}">
    <hr>
    <p><strong>Past records:</strong></p>
    @foreach ($pet->visits as $visit)
        <p>{{$visit->updated_at}} - {{$visit->report}} <a href="{{route('visits.edit', [$visit->id])}}">Edit</a></p>
    @endforeach
@endsection