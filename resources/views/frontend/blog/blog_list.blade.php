<section class="blogpage section">
    <div class="containers">
        <div class="wrap_background_aside margin-bottom-0">
            <div class="container card py2">
                <div class="row">
                    <div class="col-12 px-4 py-1 content-blog ">
                        <h1 class="title_page mb-3">Tin Tức</h1>
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="news-item" style="--blog-bg: #f0fbf5">
                                    <div class="home-news ">
                                        <div class="home-news__img embed-responsive">

                                            <img class="lazyload loaded"
                                                src="{{$blogs->image}}"
                                                data-src="{{$blogs->image}}"
                                                alt="Thử ngay món cồi sò điệp xào bông cải cả nhà cùng thích mê"
                                                data-was-processed="true">

                                        </div>
                                        
                                        <div class="home-news__info">
                                            <div class="news-content">
                                                <h3 class="mb-3">
                                                    <a href="/blogs/tin-tuc-2/thu-ngay-mon-coi-so-diep-xao-bong-cai-ca-nha-cung-thich-me"
                                                        title="Thử ngay món cồi sò điệp xào bông cải cả nhà cùng thích mê">
                                                        {{$blogs->name}}</a>
                                                </h3>

                                                <div style="display: block; display: -webkit-box; overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 5; -webkit-box-orient: vertical; width: 100%;">
                                                    {!! $blogs->description !!}
                                                </div>

                                                <a href="/blogs/tin-tuc-2/thu-ngay-mon-coi-so-diep-xao-bong-cai-ca-nha-cung-thich-me"
                                                    class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                                    Xem chi tiết
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @foreach ($blog_list as $blog_list) 
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="blogwp clearfix card border-0 ">
                                    <a class="image-blog card-img-top text-center"
                                        href="/tin-tuc/la-mieng-voi-bi-nu-xao-tom-gion-ngon-kho-cuong"
                                        title="{{$blog_list->seo_title}}">
                                        <img class="lazyload img-fluid loaded"
                                            src="{{$blog_list->image}}"
                                            data-src="{{$blog_list->image}}"
                                            alt="{{$blog_list->seo_title}}"
                                            data-was-processed="true">
                                    </a>

                                    <div class="content_blog clearfix card-body px-0">
                                        <h3>
                                            <a class="link"
                                                href="/tin-tuc/la-mieng-voi-bi-nu-xao-tom-gion-ngon-kho-cuong"
                                                title="{{$blog_list->seo_title}}">
                                                {{$blog_list->name}}
                                            </a>
                                        </h3>
                                        <div class="justify" style="display: block; display: -webkit-box; overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 4; -webkit-box-orient: vertical; width: 100%;">
                                            {!! $blog_list->description !!} 
                                        </div>
                                        <a class="button_custome_35 link"
                                                href="/tin-tuc/la-mieng-voi-bi-nu-xao-tom-gion-ngon-kho-cuong"
                                                title="Đọc tiếp">Đọc tiếp</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
