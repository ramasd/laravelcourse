@extends('base')

@section('content')
<h2>Aikštelės redagavimas</h2>

<form action="{{ url('admin/aiksteles/' . $court->id) }}" method="post">
<input name="_method" type="hidden" value="PUT">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" value="{{ $court->title }}" />
	<br /><br />
	Adresas:
	<br />
	<input type="text" name="address" value="{{ $court->address }}" />
	<br /><br />
	Aprašymas:
	<br />
	<textarea name="description">{{ $court->description }}</textarea>
	<br /><br />
	Tipas:
	<br />
	<select name="type_id">
		@foreach ($types as $type)
        <option value="{{ $type->id }}" @if ($type->id == $court->type_id) selected @endif >{{ $type->title }}</option>
		@endforeach
	</select>
	<br /><br />
	Miestas:
	<br />
	<select name="city_id">
		@foreach ($cities as $city)
		<option value="{{ $city->id }}" @if ($city->id == $court->city_id) selected @endif>{{ $city->title }}</option>
		@endforeach
	</select>
	<br /><br />
	<input type="submit" value=" Saugoti " />
</form>
@stop