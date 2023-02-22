<div class="section wrap_background">
    <div class="container">
        <div class="bg_collection section">
            <div class="row">

                <aside class="scroll card py-2 dqdt-sidebar sidebar left-content col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="wrap_background_aside asidecollection">
                        <div class="filter-content aside-filter">
                            <div class="filter-container">
                                <button class="btn d-block d-lg-none open-filters p-0">
                                    <i class="fa fa-arrow-left mr-3"> </i>
                                    <b class="d-inline"> Tìm theo </b>
                                </button>
                                <div class="filter-container__selected-filter" style="display: none">
                                    <div class="filter-container__selected-filter-header clearfix d-none">
                                        <span class="filter-container__selected-filter-header-title"><i
                                                class="fa fa-arrow-left hidden-sm-up"></i> Bạn
                                            chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                            class="filter-container__clear-all">Bỏ hết <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>


                                @include('frontend.product.filter')
                              
                                
                            </div>
                        </div>
                    </div>

                    @include('frontend.product.products_like')

                </aside>


                <div class="card py-2 main_container collection col-xl-9 col-lg-9 px-4 col-md-12 col-sm-12">
                    <div class="collection_banner mb-4">
                        <a href="all.html" title="Ảnh banner">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="
                      //theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586
                    "
                                    data-srcset="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586" />
                                <source media="(max-width: 767px)"
                                    srcset="
                      //theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586
                    "
                                    data-srcset="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner_large.jpg?v=586" />
                                <img src="../../theme.hstatic.net/200000295082/1000772075/14/collection_main_banner_picoc353.jpg?v=586"
                                    class="lazyload img-fluid"
                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586"
                                    alt="Ảnh banner" />
                            </picture>
                        </a>
                    </div>

                    <h1 class="title_page collection-title mb-0">Tất cả sản phẩm</h1>
                    <div class="filter-content aside-filter">
                        <div class="filter-container">
                            <div class="filter-container__selected-filter" style="display: none">
                                <!--<div class="filter-container__selected-filter-header clearfix">
<span class="filter-container__selected-filter-header-title">Bạn chọn</span>
</div> -->

                                <div class="filter-container__selected-filter-list mb-2">
                                    <ul></ul>
                                </div>
                                <!--<a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="category-products products">
                        <div class="border-bottom">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div class="sortPagiBar">
                                    <div class="sort-cate clearfix">
                                        <div id="sort-by" class="d-flex align-items-baseline">
                                            <label class="left">
                                                <span class="">Sắp xếp: </span></label>
                                            <ul class="ul_col ml-2 mb-0" style="list-style: none; padding: 0;">
                                                <li>
                                                    <span
                                                        class="d-flex d-lg-none align-items-center justify-content-between">Thứ
                                                        tự
                                                    </span>
                                                    <i class="fas fa-chevron-down float-right"></i>
                                                    <ul class="content_ul" style="list-style: none; padding: 0; display: flex">
                                                        <li data-sort="name:asc">
                                                            <a class="link" href="javascript:;"
                                                                onclick="sortby('alpha-asc')">Tên A &rarr; Z</a>
                                                        </li>
                                                        <li data-sort="name:desc">
                                                            <a class="link" href="javascript:;"
                                                                onclick="sortby('alpha-desc')">Tên Z &rarr; A</a>
                                                        </li>
                                                        <li data-sort="price_min:asc">
                                                            <a class="link" href="javascript:;"
                                                                onclick="sortby('price-asc')">Giá tăng dần</a>
                                                        </li>
                                                        <li data-sort="price_min:desc">
                                                            <a class="link" href="javascript:;"
                                                                onclick="sortby('price-desc')">Giá giảm dần</a>
                                                        </li>
                                                        <li data-sort="created_on:desc">
                                                            <a class="link" href="javascript:;"
                                                                onclick="sortby('created-desc')">Hàng mới
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div id="open-filters" class="btn open-filters d-lg-none d-block">
                                    <i class="fa fa-filter"></i>
                                    <span>Lọc</span>
                                </div>
                            </div>
                        </div>

                        <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                            <div class="row content-col">

                                @foreach ($product as $product)
                                    <div class="col-6 col-sm-3 product-col">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063978"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="../sanpham/{{ $product->id }}-{{ $product->seo_title }}"
                                                        title="{{ $product->name }}">

                                                        {{-- freeship --}}

                                                        {{-- <img
                            class="product-frame lazyload"
                            src="{{$product->images}}"
                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                            alt="{{$product->name}}"
                            data-image-scale="1"
                          /> --}}

                                                        <img loading="lazy" class="" width="480"
                                                            height="480" src="{{ $product->images }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/sanpham/{{ $product->id }}-{{ $product->name }}">
                                                            <a title="Xem nhanh"
                                                                href="/sanpham/{{ $product->id }}-{{ $product->name }}"
                                                                data-handle="{{ $product->code }}}"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/sanpham/{{ $product->id }}-{{ $product->name }}"
                                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">{{ $product->salePrice }}đ</span>
                                                    </div>

                                                    <div class="fundiin fundiin-alert">
                                                        Hoặc trả qua 3 kỳ với
                                                        <span
                                                            style="
                              color: #24c3fd;
                              font-size: 14px;
                              font-weight: bold;
                            ">Fundiin</span>
                                                        <a style="
                              font-size: 13px;
                              text-decoration: underline;
                            "
                                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                                            Tìm hiểu (?)</a>
                                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ
                                                            100,000₫, chỉ trả
                                                            trước từ 33,000₫)</span>
                                                    </div>

                                                    <div class="product-action-bottom" data-variant-id="1068141221">
                                                        <div class="product-cta"
                                                            data-url="/sanpham/{{ $product->id }}-{{ $product->name }}">
                                                            <input type="hidden" name="id"
                                                                value="1068141221" />
                                                            <button
                                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                                title="Thêm vào giỏ hàng">
                                                                CHỌN MUA
                                                            </button>
                                                        </div>

                                                        <div class="input_product">
                                                            <div
                                                                class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                                <button class="btn btn_num num_1 button button_qty"
                                                                    type="button">
                                                                    <span></span>
                                                                </button>
                                                                <input type="text" name="quantity" value="1"
                                                                    maxlength="3"
                                                                    class="form-control prd_quantity qty" />
                                                                <button class="btn btn_num num_2 button button_qty"
                                                                    type="button">
                                                                    <span></span><span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="section pagenav">
                                <nav class="clearfix relative nav_pagi w_100">
                                    <ul class="pagination clearfix float-right">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>

                                        <li class="active page-item disabled">
                                            <a class="page-link" href="javascript:;">1</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" onclick="doSearch(2)"
                                                href="allcf0d.html?&amp;page=2&amp;view=grid">2</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" onclick="doSearch(3)"
                                                href="all4131.html?&amp;page=3&amp;view=grid">3</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" onclick="doSearch(4)"
                                                href="all65a8.html?&amp;page=4&amp;view=grid">4</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" onclick="doSearch(2)"
                                                href="allcf0d.html?&amp;page=2&amp;view=grid"><i
                                                    class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" onclick="doSearch(4)"
                                                href="all65a8.html?&amp;page=4&amp;view=grid"><i
                                                    class="fas fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <script>
                                    var cuPage = 1;
                                </script>
                            </div>
                        </section>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@include('frontend.product.viewed')

<script>
    var colName = "Tất cả sản phẩm";

    var colId = 0;

    var selectedViewData = "data";
    $(document).ready(() => {
        if (typeof getRecentView != "undefined") {
            getRecentView("#recent-view-coll");
        }
    });
</script>
