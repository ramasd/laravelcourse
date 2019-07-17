@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <div style='color:red'>{{ $error }}</div>
        @endforeach
    </ul>
@endif
{!! Form::open(['url' => 'login']) !!}
    {!! Form::label('text', 'El.pašto adresas:') !!}
    <br />
    {!! Form::email('email') !!}
    <br /><br />
    {!! Form::label('text', 'Slaptažodis') !!}
    <br />
    {!! Form::password('password') !!}
    <br /><br />
    <button type="submit">Prisijungti</button>
{!! Form::close() !!}