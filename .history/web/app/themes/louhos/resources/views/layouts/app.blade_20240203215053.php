<!DOCTYPE html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">

      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
              @endif
            </div>
          </div>
        </nav>
      </header>

      <img class="text-center" src="https://images.pexels.com/photos/17126248/pexels-photo-17126248/free-photo-of-rakennus-kurjet-toissa-kaivinkoneet.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">

      <main id="main" class="main">
        <section class="jumbotron text-center">
          <div class="container">
            <h1 class="display-4">Welcome to Louhos</h1>
            <p class="lead">This is a simple and clean website built with Sage and Bootstrap.</p>
            <a class="btn btn-primary" href="#" role="button">Learn More</a>
          </div>
        </section>

      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
