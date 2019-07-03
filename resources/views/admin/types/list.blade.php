@extends('base')

@section('content')
<h2>Aikštelių tipai</h2>

<table class="data-table">
<tr>
	<th>Tipas</th>
	<th>Veiksmai</th>
</tr>
@if ($types->count() > 0)
	@foreach ($types as $type)
	<tr>
		<td>{{ $type->title }}</td>
		<td>
			<a href="{{ url('admin/aiksteliu_tipai/' . $type->id . '/edit') }}">Redaguoti</a>
			{!! Form::open(['url' => 'admin/aiksteliu_tipai/' . $type->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Ar tikrai?")', 'style' => 'display:inline']) !!}
				{!! Form::submit('Trinti') !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
@else
<tr>
	<td colspan="2" class="align-center">Duomenų nėra.</td>
</tr>
@endif
</table>
<br />
<a href="{{ url('admin/aiksteliu_tipai/create') }}">Naujas tipas</a>
@stop