@extends('layouts/layout')

@section('content')

@if ($pet->id)
     <form action="{{route('pets.update',[$pet->id])}}" method="POST"> 
        @method('PUT') 
@else
    <form action="{{route('pets.store')}}" method="POST"> 
@endif
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name', $pet->name)}}">
    </div>
    <div>
        <label for="breed">Breed</label>
        <input type="text" name="breed" id="breed" value="{{old('breed', $pet->breed)}}">
    </div>
    <div>
        <label for="age">age</label>
        <input type="text" name="age" id="age" value="{{old('age', $pet->age)}}">
    </div>
    <div>
        <label for="weight">Weight</label>
        <input type="text" name="weight" id="weight" value="{{old('weight', $pet->weight)}}">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{old('image', $pet->image)}}">
    </div>
    <div>
      <label for="client_id">Client_id</label>
      <input type="text" name="client_id" id="client_id" value="{{old('client_id', $pet->client_id)}}">
  </div>
    <input type="submit" value="Submit">
</form>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success_message'))
 
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
 
@endif

@endsection
