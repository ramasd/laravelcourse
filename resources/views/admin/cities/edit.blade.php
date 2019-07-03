@extends('base')

@section('content')
<h2>Miesto redagavimas</h2>

@if($errors->any())
  @foreach ($errors->all() as $error)
    <div style='color:red'>{{ $error }}</div>
  @endforeach
  <br />
@endif

{!! Form::open(['url' => 'admin/miestai/' . $city->id, 'method' => 'put']) !!}
  {!! Form::label('text', 'Pavadinimas:') !!}
  <br />
  {!! Form::text('title', $city->title) !!}
  <br />
  {!! Form::submit(' Saugoti ') !!}
{!! Form::close() !!}

@stop