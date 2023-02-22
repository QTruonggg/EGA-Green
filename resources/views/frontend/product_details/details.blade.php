@if(session()->has('success'))
  <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
    {{ session()->get('success') }}
  </div>
@endif
<script>
    setTimeout(()=> {
        $('.txt').addClass('d-none')
    },3000)
</script>

<section class="section">
    <div class="container card py-2">
        <div class="section wrap-padding-15 wp_product_main">
            <div class="details-product section">
                <div class="row">
                    <div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-8 mx-auto col-lg-5">
                        <div class="pb-3 pt-0 col_large_default large-image">
                            <div id="gallery_1" class="slider-for">
                                <div class="item">
                                    <a class="d-block pos-relative embed-responsive embed-responsive-1by1"
                                        href="{{ $product->images }}" title="{{ $product->name }}"
                                        data-image="{{ $product->images }}" data-zoom-image="{{ $product->images }}"
                                        data-rel="prettyPhoto[product-gallery]">
                                        <img class="product-frame lazyload" src="{{ $product->images }}"
                                            data-src="{{ $product->images }}" alt="{{ $product->name }}"
                                            data-image-scale="0.8" />

                                        <img class="img-fluid" style="--image-scale: 0.8"
                                            data-img="{{ $product->images }}" src="{{ $product->images }}"
                                            alt="{{ $product->name }}" width="600" height="600" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a class="d-block pos-relative embed-responsive embed-responsive-1by1"
                                        href="{{ $product->images }}" title="{{ $product->name }}"
                                        data-image="{{ $product->images }}" data-zoom-image="{{ $product->images }}"
                                        data-rel="prettyPhoto[product-gallery]">
                                        <img class="product-frame lazyload" src="{{ $product->images }}"
                                            data-src="{{ $product->images }}" alt="{{ $product->name }}"
                                            data-image-scale="0.8" />

                                        <img class="lazyload img-fluid" style="--image-scale: 0.8"
                                            data-img="{{ $product->images }}" width="600" height="600"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" loading="lazy" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a class="d-block pos-relative embed-responsive embed-responsive-1by1"
                                        href="{{ $product->images }}" title="{{ $product->name }}"
                                        data-image="{{ $product->images }}" data-zoom-image="{{ $product->images }}"
                                        data-rel="prettyPhoto[product-gallery]">
                                        <img class="product-frame lazyload" src="{{ $product->images }}"
                                            data-src="{{ $product->images }}" alt="{{ $product->name }}"
                                            data-image-scale="0.8" />

                                        <img class="lazyload img-fluid" style="--image-scale: 0.8"
                                            data-img="{{ $product->images }}" width="600" height="600"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" loading="lazy" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a class="d-block pos-relative embed-responsive embed-responsive-1by1"
                                        href="{{ $product->images }}" title="{{ $product->name }}"
                                        data-image="{{ $product->images }}" data-zoom-image="{{ $product->images }}"
                                        data-rel="prettyPhoto[product-gallery]">
                                        <img class="product-frame lazyload" src="{{ $product->images }}"
                                            data-src="{{ $product->images }}" alt="{{ $product->name }}"
                                            data-image-scale="0.8" />

                                        <img class="lazyload img-fluid" style="--image-scale: 0.8"
                                            data-img="{{ $product->images }}" width="600" height="600"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" loading="lazy" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a class="d-block pos-relative embed-responsive embed-responsive-1by1"
                                        href="{{ $product->images }}" title="{{ $product->name }}"
                                        data-image="{{ $product->images }}" data-zoom-image="{{ $product->images }}"
                                        data-rel="prettyPhoto[product-gallery]">
                                        <img class="product-frame lazyload" src="{{ $product->images }}"
                                            data-src="{{ $product->images }}" alt="{{ $product->name }}"
                                            data-image-scale="0.8" />

                                        <img class="lazyload img-fluid" style="--image-scale: 0.8"
                                            data-img="{{ $product->images }}" width="600" height="600"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" loading="lazy" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="section slickthumb_relative_product_1">
                            <div id="gallery_02" class="slider-nav slickproduct thumb_product_details">
                                <div class="item">
                                    <a href="javascript:void(0)" data-zoom-image="{{ $product->images }}">
                                        <img class="lazyload img-fluid" data-img="{{ $product->images }}"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="javascript:void(0)" data-zoom-image="{{ $product->images }}">
                                        <img class="lazyload img-fluid" data-img="{{ $product->images }}"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="javascript:void(0)" data-zoom-image="{{ $product->images }}">
                                        <img class="lazyload img-fluid" data-img="{{ $product->images }}"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="javascript:void(0)" data-zoom-image="{{ $product->images }}">
                                        <img class="lazyload img-fluid" data-img="{{ $product->images }}"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="javascript:void(0)" data-zoom-image="{{ $product->images }}">
                                        <img class="lazyload img-fluid" data-img="{{ $product->images }}"
                                            src="{{ $product->images }}" data-src="{{ $product->images }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-lg-7 details-pro py-2">
                        <h1 class="title-product">
                            {{ $product->name }}
                        </h1>
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="group-status">
                                    <span class="first_status">Thương hiệu:<span class="status_name"> Khác </span>
                                        <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    </span>
                                    <span class="first_status status_2">
                                        Tình trạng:

                                        <span class="status_name available"> Còn hàng </span>
                                    </span>
                                </div>
                                <div class="price-box">
                                    <span class="special-price"><span
                                            class="price product-price">{{ $product->salePrice }}₫</span>
                                    </span>
                                    <!-- Giá Khuyến mại -->
                                    <span class="old-price">
                                        <del class="price product-price-old sale">{{ $product->oldPrice }}₫</del>
                                    </span>
                                    <!-- Giá gốc -->
                                </div>

                                <div class="fundiin">
                                    hoặc
                                    <span style="color: black; font-weight: bold">83,000₫</span>
                                    x3 kỳ với
                                    <span
                                        style="
                        color: #24c3fd;
                        font-size: 14px;
                        font-weight: bold;
                      ">
                                        Fundiin </span><a style="font-size: 13px; text-decoration: underline"
                                        href="https://fundiin.vn/ecompopup/" target="_blank">
                                        Tìm hiểu (?)
                                    </a>
                                </div>

                                <div class="flashsale" style="--background-color: #ffc700; --countdown-background: #ff4949; --countdown-color: #ffffff; display: none;">
                                    <div class="ega-container">
                                        <div class="flashsale__header d-flex justify-content-between">
                                            <div class="flashsale__title">
                                                <h5>TẾT VUI MỌI NHÀ</h5>
                                            </div>
                                            <div class="flashsale__countdown-wrapper">
                                                <div class="flashsale__countdown" data-countdown-type="hours"
                                                    data-countdown=""></div>
                                            </div>
                                        </div>

                                        <div class="flashsale__product">
                                            <div class="flashsale__item" data-pd-id="1031063938"
                                                data-inventory-quantity="10" data-sold-quantity="1016"
                                                data-management="true" data-available="true" data-max-stock="300">
                                                <div class="flashsale__bottom" style="display: none">
                                                    <div class="flashsale__label">
                                                        <b class="flashsale__sold-qty"> 1016 </b> sản
                                                        phẩm đã bán
                                                    </div>

                                                    <div class="flashsale__progressbar">
                                                        <div class="flashsale___percent"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    window.falshSale = {
                                        flashSaleColl: "san-pham-tet",
                                        type: "hours",
                                        dateStart: "11/03/2021",
                                        dateFinish: "2",
                                        hourStart: "00:00",
                                        hourFinish: "24",
                                        activeDay: "7",
                                        finishAction: "show",
                                        finishLabel: "Chương trình đã kết thúc",
                                        percentMin: "30",
                                        percentMax: "90",
                                        maxInStock: "300",
                                        useSoldQuantity: true,
                                        useTags: false,
                                        quantityType: "sold",
                                        timestamp: new Date().getTime(),
                                    };
                                </script>
                                <script src="../../theme.hstatic.net/200000295082/1000772075/14/flashsalec353.js?v=586" defer></script>

                                <div class="bottom-cart px-md-0">
                                    <div class="back-index">
                                        <div class="gift-list">
                                            <label class="h5"><i class="fas fa-gift mr-2"></i> Siêu Ưu Đãi</label>
                                            <ul class="free-gifts">
                                                <li class="mb-3">
                                                    <span class="align-items-baseline">
                                                        <span class="mb-2">Nhập mã <b>EGAGREEN</b> để được giảm 5%
                                                            sản
                                                            phẩm thương hiệu EGA Green
                                                            <button class="btn p-1 mb-1 btn-sm js-copy"
                                                                data-copy="EGAGREEN">
                                                                Sao chép
                                                            </button>
                                                        </span>
                                                    </span>
                                                </li>

                                                <li class="mb-3">
                                                    <span class="align-items-baseline">
                                                        <span class="mb-2">Nhập mã <b>EGANY</b> để được giảm 15% tổng
                                                            giá trị đơn hàng. Số lượng có hạn
                                                            <button class="btn p-1 mb-1 btn-sm js-copy"
                                                                data-copy="EGANY">
                                                                Sao chép
                                                            </button>
                                                        </span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <form enctype="multipart/form-data" id="add-to-cart-form"
                                    action="{{ route('addProduct', $product->id) }}"
                                    >
                                    @csrf
                                    <div class="form-product w-100">
                                        <div class="box-variant clearfix">
                                            <input type="hidden" name="id" value="{{ $product->id }}" />
                                        </div>

                                        <div class="form_button_details margin-top-15 w-100">
                                            <div class="form_product_content type1">
                                                <div class="soluong soluong_type_1 show">
                                                    <label>Số lượng:</label>
                                                    <div class="custom input_number_product custom-btn-number">
                                                        <button class="btn btn_num num_1 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value--;return false;"
                                                            type="button">
                                                            -
                                                        </button>
                                                        <input type="text" id="qtym" name="qty"
                                                            value="1" maxlength="3"
                                                            class="form-control prd_quantity"
                                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                            onchange="if(this.value == 0)this.value=1;" />
                                                        <button class="btn btn_num num_2 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                            type="button">
                                                            +
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="button_actions clearfix">
                                                    @if ($product->status == '1')
                                                        <button type="submit"
                                                            class="btn btn_base btn_add_cart btn-cart add-to-cart d-block">
                                                            <span class="text_1">Thêm vào giỏ hàng</span>
                                                        </button>
                                                    @else
                                                        <button type="submit" class="add-to-cart d-block disabled"
                                                            disabled>Tạm hết hàng</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 col-md-5 product-right">
                                <div class="product-policises-wrapper">
                                    <h5 class="m-0 mb-3">Chỉ có ở EGA Green:</h5>
                                    <ul
                                        class="product-policises list-unstyled flex-column d-flex align-items-start m-0">
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/policy_product_image_1.png?v=586"
                                                    alt="100% tự nhiên" />
                                            </div>
                                            <div class="media-body">100% tự nhiên</div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/policy_product_image_2.png?v=586"
                                                    alt="Chứng nhận ATTP" />
                                            </div>
                                            <div class="media-body">Chứng nhận ATTP</div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/policy_product_image_3.png?v=586"
                                                    alt="Luôn luôn tươi mới" />
                                            </div>
                                            <div class="media-body">Luôn luôn tươi mới</div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/policy_product_image_4.png?v=586"
                                                    alt="An toàn cho sức khoẻ" />
                                            </div>
                                            <div class="media-body">An toàn cho sức khoẻ</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-trustbadge my-3">
                                    <a href="#" title="Phương thức thanh toán">
                                        <img class="lazyload img-fluid"
                                            src="../../theme.hstatic.net/200000295082/1000772075/14/product_banner_img_picoc353.jpg?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/product_banner_img.jpg?v=586"
                                            alt="Phương thức thanh toán"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>