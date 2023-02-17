<section class="section awe-section-2">
    <section class="section_brand section">
        <div class="container px-md-0">
            <div class="row text-center flex-nowrap js-slider">
                @foreach($category as $category)
                <div class="item mt-2">
                    <a href="collections/all.html" title="{{ $category->name }}">
                        <img class="lazyload img-fluid"
                            src="{{$category->image}}"
                            {{-- data-src="{{$category->image}}" --}}
                            alt="{{ $category->id }}" />
                    </a>
                    <h3>
                        <a href="collections/all.html" title="{{ $category->name }}">
                            {{ $category->name }}
                        </a>
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>