@extends('base')

@section('content')
<h2>Nauja aikštelė</h2>

<form action="{{ url('admin/aiksteles') }}" method="post">
{{ csrf_field() }}
	Pavadinimas:
	<br />
	<input type="text" name="title" />
	<br /><br />
    Adresas:
    <br />
    <input type="text" name="address" />
	<br /><br />
	Aprašymas:
    <br />
	<textarea name="description"></textarea>
	<br /><br />
    Tipas:
    <br />
    <select name="type_id">
        @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->title }}</option>
        @endforeach
    </select>
    <br /><br />
    Miestas:
    <br />
    <select name="city_id">
        @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->title }}</option>
        @endforeach
    </select>
    <br /><br />
	<input type="submit" value=" Saugoti " />
</form>
@stop


