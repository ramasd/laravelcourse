<ul>
    <li><a href="{{ url('/') }}">Pagrindinis</a></li>
    <li><a href="{{ url('apie') }}">Apie projektą</a></li>
    <li><a href="{{ url('kontaktai') }}">Kontaktai</a></li>
    <br><br>
    @if (Auth::check())
    <li><a href="{{ url('admin/aiksteles') }}">Aikštelės</a></li>
    <li><a href="{{ url('admin/aiksteliu_tipai') }}">Aikštelių tipai</a></li>
    <li><a href="{{ url('admin/miestai') }}">Miestai</a></li>
    <li><a href="{{ url('logout') }}">Atsijungti</a></li>
    @else
    <li><a href="{{ url('login') }}">Prisijungti</a></li>
    <li><a href="{{ url('register') }}">Užsiregistruoti</a></li>
    @endif
</ul>