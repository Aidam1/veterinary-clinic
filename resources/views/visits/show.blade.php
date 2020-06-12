@extends('layouts.layout')

@section('content')
<p><strong>Report nr. {{$visit->id}}</strong></p>
<p>Client: {{$visit->client->first_name}} {{$visit->client->last_name}}</p>
<p>Pet: {{$visit->pet->name}}</p>
<p>{{$visit->report}}</p>

@endsection