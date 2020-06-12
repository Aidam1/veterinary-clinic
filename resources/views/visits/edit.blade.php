@extends('layouts/layout')

@section('content')

@if ($visit->id)
     <form action="{{route('visits.update',[$visit->id])}}" method="POST"> 
        @method('PUT') 
@else
    <form action="{{route('visits.store')}}" method="POST"> 
@endif
    @csrf
    <div>
        <label for="client_id">Client ID</label>
        <input type="text" name="client_id" id="client_id" value="{{old('client_id', $visit->client_id)}}">
    </div>
    <div>
        <label for="pet_id">Pet ID</label>
        <input type="text" name="pet_id" id="pet_id" value="{{old('pet_id', $visit->pet_id)}}">
    </div>
    <div>
        <label for="report">Report</label>
        <input type="text" name="report" id="report" value="{{old('report', $visit->report)}}">
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
