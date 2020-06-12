@extends('layouts/layout')

@section('content')

@if ($client->id)
     <form action="{{route('clients.update',[$client->id])}}" method="POST"> 
        @method('PUT') 
@else
    <form action="{{route('clients.store')}}" method="POST"> 
@endif
    @csrf
    <div>
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" value="{{old('first_name', $client->first_name)}}">
    </div>
    <div>
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" value="{{old('last_name', $client->last_name)}}">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{old('address', $client->address)}}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('email', $client->email)}}">
    </div>
    <div>
        <label for="phone_number">Phone number</label>
        <input type="text" name="phone_number" id="phone_number" value="{{old('phone_number', $client->phone_number)}}">
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
