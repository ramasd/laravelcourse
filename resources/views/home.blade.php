@extends('base')

{{ Session::get('year') }}

@section('content')
<h2>Aikštelės paieška</h2>
<form action="{{ url('aiksteles') }}" method="post">
    <input type="text" name="search" />
    <input type="submit" name="search_submit" value=" Ieškoti " />
</form>
@stop