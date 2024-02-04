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

      <header style="background-image: url('https://louhosdigital.fi/_thumbs/wManage/data/userfiles/images/1000x1000_595030_301020_WhiteLiiga-netti-85.webp'); background-size: cover; background-position: top; height: 650px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ home_url('/') }}"><img src="https://louhosdigital.fi/img/louhos-gold.svg" alt="{{ get_bloginfo('name', 'display') }}" height="30"></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'menu_item_class' => 'nav-item mr-2']) !!}
          @endif
        </div>

          </div>
        </nav>
      </header>


      <main id="main" class="main">
  <section class="jumbotron text-center" style="background-image: url('{{ get_template_directory_uri() }}/path/to/your/image.jpg'); background-size: cover; background-position: top; height: 650px;">
    <div class="container">
  
        <h1 class="display-4">{!! get_the_title() !!}</h1>
        <div class="lead">{!! get_the_content() !!}</div>
        <a class="btn btn-dark" href="{{ get_permalink() }}" role="button">Learn More</a>
   
    </div>
  </section>
</main>


      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

    </div>

    <footer>
      <p class="text-center">&copy; {{ date('Y') }} Louhos Theme</p>
    </footer>

    @php(wp_footer())

  </body>
</html>
