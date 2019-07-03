@extends('base')

@section('content')
<h2>Aikštelės redagavimas</h2>

@if($errors->any())
  @foreach ($errors->all() as $error)
    <div style='color:red'>{{ $error }}</div>
  @endforeach
  <br />
@endif

{!!Form::open(['url' => 'admin/aiksteles/' . $court->id, 'method' => 'put']) !!}
  {!! Form::label('text', 'Pavadinimas:') !!}
  <br />
  {!! Form::text('title', $court->title) !!}
  <br /><br />
  {!! Form::label('text', 'Adresas:') !!}
  <br />
  {!! Form::text('address', $court->address) !!}
  <br /><br />
  {!! Form::label('text', 'Aprašymas:') !!}
  <br />
  {!! Form::textarea('description', $court->description) !!}
  <br /><br />
  {!! Form::label('text', 'Tipas:') !!}
  <br />
  {!! Form::select('type_id', \App\Type::pluck('title'), $court->type_id, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::label('Miestas:') !!}
  <br />
  {!! Form::select('city_id', \App\City::pluck('title'), $court->city_id, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::submit('Saugoti') !!}
  <br />
{!! Form::close() !!}

@stop