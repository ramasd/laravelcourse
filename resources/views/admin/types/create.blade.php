@extends('base')

@section('content')
<h2>Naujas tipas</h2>

<form action="{{ url('admin/aiksteliu_tipai') }}" method="post">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" />
	<br />
	<input type="submit" value=" Saugoti " />
</form>
@stop