<style>
table {
    width:100%;
    text-align:center;
    border:1px solid black;
}
th, td {
    border-bottom: 1px solid #ddd;
}
</style>
@extends('base')

{{ Session::get('year') }}

@section('content')
<h1>Naujausios aikštelės</h1>
<table>
    <tr>
        <th>Pavadinimas</th>
        <th>Adresas</th> 
        <th>Miestas</th>
    </tr>
    @foreach ($newest_courts as $court)
    <tr>
        <td><a href="{{ url('aikstele/' . $court->id) }}"><h4>{{ $court->title }}</h4></a></td>
        <td>{{ $court->address }}</td>
        <td>{{ $court->city->title }}</td>
    </tr>
    @endforeach
</table>
@stop