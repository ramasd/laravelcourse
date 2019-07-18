@if (Auth::guest())
    {!! Form::open(array('url' => 'aiksteles')) !!}
        Miestas: {!! Form::select('city_id', \App\City::pluck('title', 'id')) !!}
        Aikštelės tipas: {!! Form::select('type_id', \App\Type::pluck('title', 'id')) !!}
        Pavadinimas: {!! Form::text('search') !!}
        {!! Form::submit('Ieškoti') !!}
    {!! Form::close() !!}
@endif