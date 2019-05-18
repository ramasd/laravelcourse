<html>
  <head>
  <title>{{ $meta_title ?? 'Krepšinio aikštelės' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <a id="logo" href="{{ url('/') }}">KREPŠINIO AIKŠTELĖS</a>
      </div>
      <div id="main_menu">
        <ul>
          <li><a href="{{ url('/') }}">Pagrindinis</a></li>
          <li><a href="{{ url('aiksteles') }}">Aikštelių paieška</a></li>
          <li><a href="{{ url('apie') }}">Apie projektą</a></li>
          <li><a href="{{ url('kontaktai') }}">Kontaktai</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div id="content">
        @yield('content')
      </div>
      <div id="footer">
        © {{ date('Y') }}
      </div>
    </div>
  </body>
</html>