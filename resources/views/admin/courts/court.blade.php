@extends('base')

@section('content')

<table style="width:100%; text-align:center; border:1px solid black;">
  <tr>
    <th>Pavadinimas</th>
    <th>Adresas</th> 
    <th>Aprašymas</th>
    <th>Tipas</th>
    <th>Miestas</th>
    <th>Nuotrauka</th>
  </tr>
  <tr>
    <td>{{ $court->title }}</td>
    <td>{{ $court->address }}</td>
    <td>{{ $court->description }}</td>
    <td>{{ $court->type->title }}</td>
    <td>{{ $court->city->title }}</td>
    <td>
    @if($court->img)
      <a href="{{ asset(Storage::url($court->img)) }}">  
        <img src="{{ url('storage/'.$court->img) }}" alt="{{ $court->img }}" height="200" width="200"></td>    
      </a>
    @else
      {{ 'Nuotraukos nėra' }}
    @endif
  </tr>
</table>
@stop