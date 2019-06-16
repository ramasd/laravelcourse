@extends('base')

@section('content')
<h2>Naujas miestas</h2>

<form action="{{ url('admin/miestai') }}" method="post">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" />
	<br />
	<input type="submit" value=" Saugoti " />
</form>
@stop