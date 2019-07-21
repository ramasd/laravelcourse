@extends('base')

@section('content')
<h2>Aikštelės redagavimas</h2>

@if($errors->any())
  @foreach ($errors->all() as $error)
    <div style='color:red'>{{ $error }}</div>
  @endforeach
  <br />
@endif

{!!Form::open(['url' => 'admin/aiksteles/' . $court->id, 'method' => 'put', 'files' => 'true']) !!}
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
  {!! Form::label('Nuotrauka:') !!}
  <br />
  @if ($court->img)
    <a href="{{ asset(Storage::url($court->img)) }}">
      <img src="{{ url('storage/'.$court->img) }}" alt="{{ $court->img }}" height="100" width="100">
    </a>
    <br />
  @endif
  <br />
  <label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> Pasirinkti nuotrauką
  </label>
  {!! Form::file('image', ['id' => 'file-upload']) !!}
  <br />
  {!! Form::label('text', 'Tipas:') !!}
  <br />
  {!! Form::select('type_id', \App\Type::pluck('title', 'id'), $court->type_id, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::label('Miestas:') !!}
  <br />
  {!! Form::select('city_id', \App\City::pluck('title', 'id'), $court->city_id, ['placeholder' => '']) !!}
  <br /><br />
  {!! Form::submit('Saugoti') !!}
  <br />
{!! Form::close() !!}

@stop