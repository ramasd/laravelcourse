<h2>Registracija</h2> 

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <div style='color:red'>{{ $error }}</div>
        @endforeach
    </ul>
@endif

{!! Form::open(['url' => 'register']) !!}
    {!! Form::label('text', 'Vardas:') !!}
    <br />
    {!! Form::text('name') !!}
    <br /><br />
    {!! Form::label('text', 'El.pašto adresas:') !!}
    <br />
    {!! Form::email('email') !!}
    <br /><br />
    {!! Form::label('text', 'Slaptažodis:') !!}
    <br />
    {!! Form::password('password') !!}
    <br /><br />
    {!! Form::label('text', 'Pakartokite slaptažodį:') !!}    
    <br />
    {!! Form::password('password_confirmation') !!}
    <br /><br />
    <button type="submit">Registruotis</button>
{!! Form::close() !!}