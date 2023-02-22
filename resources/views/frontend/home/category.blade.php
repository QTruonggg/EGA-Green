<section class="section awe-section-2">
    <section class="section_brand section">
        <div class="container px-md-0">
            <div class="row text-center flex-nowrap js-slider">
                @foreach($categorys as $categorys)
                <div class="item mt-2">
                    <a href="collections/all.html" title="{{ $categorys->name }}">
                        <img class="lazyload img-fluid"
                            src="{{$categorys->image}}"
                            {{-- data-src="{{$category->image}}" --}}
                            alt="{{ $categorys->id }}" />
                    </a>
                    <h3>
                        <a href="" title="{{ $categorys->name }}">
                            {{ $categorys->name }}
                        </a>
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>