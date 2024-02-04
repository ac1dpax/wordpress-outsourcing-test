<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')

  <body @php(body_class())>
    <header>
      @include('partials.menu')
    </header>

    <main role="main">
      @yield('content')
    </main>

    <footer>
      <p>&copy; {{ date('Y') }} My Sage Theme</p>
    </footer>

    @php(wp_footer())
  </body>
</html>
