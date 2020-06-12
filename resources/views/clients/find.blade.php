@extends('layouts.layout')

@section('content')

@foreach ($clients as $client)

  <p>{{ $client->last_name }}</p>

@endforeach


@endsection