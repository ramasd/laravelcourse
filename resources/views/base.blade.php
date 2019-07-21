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
        @include('base.menu')
        <div class="clear"></div>
      </div>
      <br />
      <div id="content">
        @include('base.search')
        @yield('content')
      </div>
      <div id="footer">
        &copy; {{ date('Y') }}
      </div>
    </div>
  </body>
</html>