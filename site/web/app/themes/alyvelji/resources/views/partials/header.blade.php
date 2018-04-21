<header class="banner">
  <div class="container">
    {{-- {{ get_bloginfo('name', 'display') }} --}}
<a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/alyvelji-logo.svg')" alt=""></a> 


    <button class="navbar-toggler btn d-md-none" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     MENU ☰
  </button>
    <nav class="nav-primary navbar-expand-md">
      <div class="col-xl-12 navbar-collapse collapse" id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu($primarymenu) !!}
  @endif
      </div>
    </nav>
  </div>
</header>
