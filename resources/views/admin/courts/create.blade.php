@extends('base')

@section('content')
<h2>Nauja aikštelė</h2>

@if($errors->any())
  @foreach ($errors->all() as $error)
    <div style='color:red'>{{ $error }}</div>
  @endforeach
  <br />
@endif

{!! Form::open(['url' => 'admin/aiksteles']) !!}
  {!! Form::label('text', 'Pavadinimas:') !!}
  <br />
  {!! Form::text('title') !!}
  <br /><br />
  {!! Form::label('text', 'Adresas:') !!}
  <br />
  {!! Form::text('address') !!}
  <br /><br />
  {!! Form::label('text', 'Aprašymas:') !!}
  <br />
  {!! Form::textarea('description') !!}
  <br /><br />
  {!! Form::label('Tipas:') !!}
  <br />
  {!! Form::select('type_id', \App\Type::pluck('title'), null, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::label('Miestas:') !!}
  <br />
  {!! Form::select('city_id', \App\City::pluck('title'), null, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::submit('Saugoti') !!}
  <br />
{!! Form::close() !!}

@stop


