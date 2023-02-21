<section class="section awe-section-1 mt-4">
    <div class="container section px-md-0 mt-lg-0 mt-3">
        <div class="section_slider clearfix">
            <div class="home-slider d-flex align-items-center">
                @foreach($banner as $banner)
                <div class="items">
                    <a href="collections/all.html" title="{{$banner->name}}">
                        <picture>
                            <source media="(max-width: 480px)"
                                srcset="//theme.hstatic.net/200000295082/1000772075/14/slider_1_large.jpg?v=586"/>
                            <img width="1200" height="410" class="img-fluid" loading="lazy"
                                src="{{$banner->image}}"alt="{{$banner->name}}"/>
                        </picture>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
