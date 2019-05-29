@extends('base')

@section('content')
{{ Session::get('message') }}
@stop