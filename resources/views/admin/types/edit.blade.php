@extends('base')

@section('content')
<h2>Tipo redagavimas</h2>

<form action="{{ url('admin/aiksteliu_tipai/' . $type->id) }}" method="post">
<input name="_method" type="hidden" value="PUT">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" value="{{ $type->title }}" />
	<br />
	<input type="submit" value=" Saugoti " />
</form>
@stop