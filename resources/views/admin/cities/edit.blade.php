@extends('base')

@section('content')
<h2>Miesto redagavimas</h2>

<form action="{{ url('admin/miestai/' . $city->id) }}" method="post">
<input name="_method" type="hidden" value="PUT">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" value="{{ $city->title }}" />
	<br />
	<input type="submit" value=" Saugoti " />
</form>
@stop