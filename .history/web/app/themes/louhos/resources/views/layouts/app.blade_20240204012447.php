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

    <header class="parallax-bg" style="background-image: url('https://louhosdigital.fi/_thumbs/wManage/data/userfiles/images/1000x1000_595030_301020_WhiteLiiga-netti-85.webp'); height: 550px;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
          <a class="navbar-brand" href="{{ home_url('/') }}"><img src="https://louhosdigital.fi/img/louhos-gold.svg" alt="{{ get_bloginfo('name', 'display') }}" height="30"></a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'menu_item_class' => 'nav-item mr-2']) !!}
            @endif
          </div>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
        <div class="row">

          <main id="main" class="col-md-6 mt-6">
            <section class="jumbotron mb-10">
              <div class="container">
                <h1 class="display-4">{!! get_the_title() !!}</h1>
                <div class="lead">{!! get_the_content() !!}</div>
                <a class="btn btn-dark" href="{{ get_permalink() }}" role="button">Learn More</a>
              </div>
            </section>
          </main>

          <aside class="sidebar col-md-4 mt-6">
          <section class="jumbotron mb-10 p-10">
              <div class="container">
              <?php
              if (is_active_sidebar('sidebar-1')) {
                dynamic_sidebar('sidebar-1');
              }
              ?>
              </div>
          </section>
            
          </aside>

        </div>
      </div>


    @include('sections.footer')

  </div>

  <footer class="bg-dark text-light py-4">
    <div class="container text-center">
      <p>&copy; {{ date('Y') }} Louhos Theme</p>
    </div>
  </footer>

  @php(wp_footer())
</body>
</html>
