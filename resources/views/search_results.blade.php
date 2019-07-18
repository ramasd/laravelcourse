@extends('base')

@section('content')
@if (count($courts) > 0)
  @foreach ($courts as $court)
    <a href="{{ url('aikstele/' . $court->id) }}"><h4>{{ $court->title }}</h4></a>
    {{ $court->address }}, {{ $court->city->title }}
  @endforeach
@else
  Aikštelių nerasta.
@endif
@stop