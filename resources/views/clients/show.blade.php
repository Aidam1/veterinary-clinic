@extends('layouts.layout')

@section('content')


<p>{{ $client->first_name}}, {{$client->last_name}} </p>

@endsection