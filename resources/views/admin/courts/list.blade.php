@extends('base')

@section('content')
<h2>Aikštelės</h2>

<table class="data-table">
<tr>
	<th>Nuotrauka</th>
	<th>Pavadinimas</th>
	<th>Adresas</th>
	<th>Veiksmai</th>
</tr>
@if ($courts->count() > 0)
	@foreach ($courts as $court)
	<tr>
		<td>
			@if ($court->img)
			<a href="{{ asset(Storage::url($court->img)) }}">
			<!-- Better to use "asset(Storage::url($court->img))" or "url('storage/images/'.$court->img)" ?-->
				<img src="{{ url('storage/'.$court->img) }}" alt="{{ $court->img }}" height="60" width="60">
			</a>
			@endif
		</td>
		<td><a href="{{ url('admin/aiksteles/' . $court->id) }}">{{ $court->title }}</a></td>
		<td>{{ $court->address }}</td>
		<td>
			<a href="{{ url('admin/aiksteles/' . $court->id . '/edit') }}">Redaguoti</a>
			{!! Form::open(['url' => 'admin/aiksteles/' . $court->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Ar tikrai?")', 'style' => 'display:inline']) !!}
				{!! Form::submit('Trinti') !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
@else
<tr>
	<td colspan="3" class="align-center">Duomenų nėra.</td>
</tr>
@endif
</table>
<br />
<a href="{{ url('admin/aiksteles/create') }}">Nauja aikštelė</a>
@stop