

<div class="row">
    
    
    <div class="col-md-7 promo-content">
@php(the_content())
    </div>
<div class="promo-shot col-md-5">
    <img class="mw-100 w-100" src="@asset('images/aly-headshot.jpg')" alt="Aly Velji Headshot">
</div>
   
</div>

</main></div></div>


<div class="section-title pt-3 pb-3">
    
    <h2 class="text-center">Design Packages</h2>

</div>

@include('partials.front-services')
@include('partials.blog')
@include('partials.recent-projects')
@include('partials.design-awards')
@include('partials.instagram')
<div class="wrap container" role="document">


{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
