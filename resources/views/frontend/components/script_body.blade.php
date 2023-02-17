<script type="text/x-custom-template" data-template="navigation">
    <nav>
    <ul  class="navigation list-group list-group-flush scroll">
                <li class="menu-item list-group-item">
            <a href="/" class="menu-item__link" title="TRANG CHỦ">
            <span>			TRANG CHỦ</span>
                </a>
                        </li>
                <li class="menu-item list-group-item">
            <a href="/collections/all" class="menu-item__link" title="SẢN PHẨM">
            <span>			SẢN PHẨM</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>
                                            <div class="submenu scroll  mega-menu ">
                            <ul class="submenu__list">
                @foreach($category_products as $category_product)
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="{{$category_product->name}}">{{$category_product->name}}</a>
                    </span>
                    
                    @foreach($category_product->childs as $subcategory)
                        <span class="submenu__item submenu__item">
                            <a class="link" href="/" title="{{$subcategory->name}}">{{$subcategory->name}}</a>
                        </span>
                    @endforeach


                </li>
                @endforeach



            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/collections/san-pham-tet" class="menu-item__link" title="SẢN PHẨM TẾT">
            <span>			<img src="//theme.hstatic.net/200000295082/1000772075/14/icon_menu_flashsale.png?v=586" alt="SẢN PHẨM TẾT" />
                            SẢN PHẨM TẾT</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/" class="menu-item__link" title="SALES PAGE">
            <span>			SALES PAGE</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>




                                <div class="submenu scroll  default ">
                            <ul class="submenu__list">



                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/foodnbeverage-001" title="Food & Beverage">Food & Beverage</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/blackfriday-001" title="Black Friday">Black Friday</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/xmas-002" title="XMas 002">XMas 002</a>
                    </li>


            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/collections/san-pham-tet" class="menu-item__link" title="KHUYẾN MÃI HOT">
            <span>			KHUYẾN MÃI HOT</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/blogs/tin-tuc-2" class="menu-item__link" title="TIN TỨC">
            <span>			TIN TỨC</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>





                                <div class="submenu scroll  default ">
                            <ul class="submenu__list">



                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Công thức nấu ăn">Công thức nấu ăn</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Công thức pha chế">Công thức pha chế</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Món ngon mỗi ngày">Món ngon mỗi ngày</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Món ăn healthy">Món ăn healthy</a>
                    </li>


            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/pages/about-us" class="menu-item__link" title="GIỚI THIỆU">
            <span>			GIỚI THIỆU</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/pages/lien-he" class="menu-item__link" title="LIÊN HỆ">
            <span>			LIÊN HỆ</span>
                </a>

                        </li>

    </ul>
        </nav>
  </script>

<script type="text/x-custom-template" data-template="menuMobile">
    <div id="mobile-menu" class="scroll">
        <div class='media d-flex user-menu'>

            <i class="fas fa-user-circle mr-3 align-self-center"></i>
            <div class="media-body d-md-flex flex-column ">
                            <a rel="nofollow" href="/account/login" class="d-block" title="Đăng nhập" >
                    Đăng nhập
                </a>
                <small>
                    <a href="/account/register" title="Đăng ký" class="font-weight: light">
                        Đăng ký
                    </a> </small>

            </div>
        </div>
        <div class="mobile-menu-body scroll">
                    <nav>
    <ul  class="navigation list-group list-group-flush scroll">



                <li class="menu-item list-group-item">
            <a href="/" class="menu-item__link" title="TRANG CHỦ">
            <span>			TRANG CHỦ</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/collections/all" class="menu-item__link" title="SẢN PHẨM">
            <span>			SẢN PHẨM</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>





                                            <div class="submenu scroll  mega-menu ">
                            <div class='toggle-submenu'>
                    <i class='fas fa-chevron-left mr-3'></i>
                    <span>SẢN PHẨM </span>
                </div>
                            <ul class="submenu__list">



                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Trái Cây">Trái Cây</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trái Cây Nhập">Trái Cây Nhập</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trái Cây Việt">Trái Cây Việt</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Giỏ Quà Trái Cây">Giỏ Quà Trái Cây</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trái Cây Đông Lạnh">Trái Cây Đông Lạnh</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trái Cây Sấy">Trái Cây Sấy</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Muối Chấm">Muối Chấm</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Thịt, Hải Sản">Thịt, Hải Sản</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thịt Heo">Thịt Heo</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thịt Bò">Thịt Bò</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Hải sản">Hải sản</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Gà vịt trứng">Gà vịt trứng</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thực phẩm đóng hộp">Thực phẩm đóng hộp</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Thực Phẩm Chế Biến">Thực Phẩm Chế Biến</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Lạp xưởng, xúc xích">Lạp xưởng, xúc xích</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thực phẩm đông lạnh">Thực phẩm đông lạnh</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thực phẩm đóng hộp">Thực phẩm đóng hộp</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Lẩu các loại">Lẩu các loại</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thịt khô, xông khói">Thịt khô, xông khói</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Chà bông">Chà bông</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Thực Phẩm Khô">Thực Phẩm Khô</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Gạo, nếp">Gạo, nếp</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Bột làm bánh, bột chiên">Bột làm bánh, bột chiên</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Đậu, mè">Đậu, mè</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Hạt các loại">Hạt các loại</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Ngũ cốc dinh dưỡng">Ngũ cốc dinh dưỡng</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Mứt, mật ong">Mứt, mật ong</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Bơ Sữa">Bơ Sữa</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Sữa động vật">Sữa động vật</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Sữa hạt">Sữa hạt</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Sữa chua, kem">Sữa chua, kem</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Bơ, phô mai">Bơ, phô mai</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Đồ Uống">Đồ Uống</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Nước ép trái cây">Nước ép trái cây</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Nước ngọt, nước suối">Nước ngọt, nước suối</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trà, cà phê">Trà, cà phê</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Si-rô, bột rau củ">Si-rô, bột rau củ</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thạch sâm, rau câu">Thạch sâm, rau câu</a>
                     </span>

                </li>




                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/" title="Thực Phẩm Tết">Thực Phẩm Tết</a>
                    </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Hạt các loại">Hạt các loại</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Thịt khô">Thịt khô</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Trái cây sấy">Trái cây sấy</a>
                     </span>

                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Bánh kẹo Tết">Bánh kẹo Tết</a>
                     </span>

                </li>


            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/collections/san-pham-tet" class="menu-item__link" title="SẢN PHẨM TẾT">
            <span>			<img src="//theme.hstatic.net/200000295082/1000772075/14/icon_menu_flashsale.png?v=586" alt="SẢN PHẨM TẾT" />
                            SẢN PHẨM TẾT</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/" class="menu-item__link" title="SALES PAGE">
            <span>			SALES PAGE</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>




                                <div class="submenu scroll  default ">
                            <div class='toggle-submenu'>
                    <i class='fas fa-chevron-left mr-3'></i>
                    <span>SALES PAGE </span>
                </div>
                            <ul class="submenu__list">



                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/foodnbeverage-001" title="Food & Beverage">Food & Beverage</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/blackfriday-001" title="Black Friday">Black Friday</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/pages/xmas-002" title="XMas 002">XMas 002</a>
                    </li>


            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/collections/san-pham-tet" class="menu-item__link" title="KHUYẾN MÃI HOT">
            <span>			KHUYẾN MÃI HOT</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/blogs/tin-tuc-2" class="menu-item__link" title="TIN TỨC">
            <span>			TIN TỨC</span>
                <i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
                </a>





                                <div class="submenu scroll  default ">
                            <div class='toggle-submenu'>
                    <i class='fas fa-chevron-left mr-3'></i>
                    <span>TIN TỨC </span>
                </div>
                            <ul class="submenu__list">



                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Công thức nấu ăn">Công thức nấu ăn</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Công thức pha chế">Công thức pha chế</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Món ngon mỗi ngày">Món ngon mỗi ngày</a>
                    </li>




                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/blogs/tin-tuc-2" title="Món ăn healthy">Món ăn healthy</a>
                    </li>


            </ul>
            </div>
                </li>



                <li class="menu-item list-group-item">
            <a href="/pages/about-us" class="menu-item__link" title="GIỚI THIỆU">
            <span>			GIỚI THIỆU</span>
                </a>

                        </li>



                <li class="menu-item list-group-item">
            <a href="/pages/lien-he" class="menu-item__link" title="LIÊN HỆ">
            <span>			LIÊN HỆ</span>
                </a>

                        </li>

    </ul>
        </nav>
        </div>

        <div class="mobile-menu-footer border-top w-100 d-flex align-items-center text-center">
            <div class="hotline  w-50   p-2 ">
                <a  href="tel:0999999999" title="0999999999 ">
                    Gọi điện <i class="fas fa-phone ml-3"></i>
                </a>
            </div>
                    <div class="messenger border-left p-2 w-50 border-left">

                <a  href="https://m.me/EGAnyTech" title="https://m.me/EGAnyTech">
                    Nhắn tin
                    <i class="fab fa-facebook-messenger ml-3"></i>
                </a>
            </div>

        </div>
    </div>
    <div class='menu-overlay'>

    </div>
  </script>
<script type="text/javascript" src="../hstatic.net/0/0/global/api.jquery.js"></script>
<script src="../hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>

<div id="quick-view-product" class="quickview-product" style="display: none">
    <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
    <div class="quick-view-product"></div>
    <div id="quickview-modal" style="display: none">
        <div class="block-quickview primary_block details-product">
            <div class="row">
                <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                    <div class="image-block large-image col_large_default">
                        <span class="view_full_size">
                            <a class="img-product d-block pos-relative embed-responsive embed-responsive-1by1"
                                title="" href="javascript:;">
                                <img src="../bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif"
                                    id="product-featured-image-quickview"
                                    class="img-responsive product-featured-image-quickview" alt="quickview" />
                            </a>
                        </span>
                        <div class="loading-imgquickview" style="display: none"></div>
                    </div>
                    <div class="more-view-wrapper clearfix">
                        <div class="thumbs_quickview owl_nav_custome1" id="thumbs_list_quickview">
                            <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq"
                                id="thumblist_quickview"></ul>
                        </div>
                    </div>
                </div>
                <div
                    class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
                    <div class="head-qv group-status">
                        <h3 class="qwp-name title-product">abc</h3>
                        <div class="vend-qv group-status">
                            <div class="left_vend">
                                <div class="first_status d-inline-block">
                                    Thương hiệu:
                                    <span class="vendor_ status_name"></span>
                                </div>
                                <span class="line_tt">|</span>
                                <div class="top_sku first_status d-inline-block">
                                    Mã sản phẩm:
                                    <span class="sku_ status_name"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quickview-info">
                        <span class="prices price-box">
                            <span class="price product-price"></span>
                            <del class="old-price"></del>
                        </span>
                    </div>

                    <form action="https://ega-green.myharavan.com/cart/add" method="post" enctype="multipart/form-data"
                        class="quick_option variants form-ajaxtocart form-product">
                        <span class="price-product-detail hidden" style="opacity: 0">
                            <span class=""></span>
                        </span>
                        <select name="variantId" class="hidden" style="display: none"></select>

                        <div class="form-group form_product_content">
                            <div class="count_btn_style quantity_wanted_p">
                                <div class="custom input_number_product soluong1">
                                    <button class="btn_num btn num_1 button button_qty"
                                        onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">
                                        -
                                    </button>
                                    <input type="text" id="quantity-detail" name="quantity" value="1"
                                        maxlength="3" class="form-control prd_quantity"
                                        onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                        onchange="if(this.value == 0)this.value=1;" />
                                    <button class="btn_num btn num_2 button button_qty"
                                        onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                        +
                                    </button>
                                </div>
                                <div class="button_actions clearfix">
                                    <button type="submit"
                                        class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                                        <span class="btn-content text_1">Thêm vào giỏ hàng</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-cart px-md-0">
                            <div class="back-index">
                                <div class="gift-list">
                                    <label class="h5"><i class="fas fa-gift mr-2"></i> Siêu Ưu Đãi</label>
                                    <ul class="free-gifts">
                                        <li class="mb-3">
                                            <span class="align-items-baseline">
                                                <span class="mb-2">Nhập mã <b>EGAGREEN</b> để được giảm 5% sản phẩm
                                                    thương hiệu EGA Green
                                                    <button class="btn p-1 mb-1 btn-sm js-copy" data-copy="EGAGREEN">
                                                        Sao chép
                                                    </button>
                                                </span>
                                            </span>
                                        </li>

                                        <li class="mb-3">
                                            <span class="align-items-baseline">
                                                <span class="mb-2">Nhập mã <b>EGANY</b> để được giảm 15% tổng giá
                                                    trị đơn hàng. Số lượng có hạn
                                                    <button class="btn p-1 mb-1 btn-sm js-copy" data-copy="EGANY">
                                                        Sao chép
                                                    </button>
                                                </span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fas fa-times"></i></a>
    </div>
</div>
<script type="text/javascript">
    Haravan.doNotTriggerClickOnThumb = false;

    function changeImageQuickView(img, selector) {
        var src = $(img).attr("src");
        src = src.replace("_compact", "");

        var $videoEl = $(selector).parent();

        if (src.indexOf("video") > -1) {
            $(selector).hide();
            var codevideo = $(img).parent().data().videocode.split("_")[1];
            var videoHtml =
                `<iframe style="z-index:99" width="560" height="315" src="https://www.youtube.com/embed/${codevideo}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            $videoEl.append(videoHtml);
        } else {
            $videoEl.find("iframe").remove();
            $(selector).show();
            $(selector).attr("src", src);
        }
    }

    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    var selectCallbackQuickView = function(variant, selector) {
        $("#quick-view-product form").show();
        var productItem = jQuery(".quick-view-product .product-item"),
            addToCart = productItem.find(".add_to_cart_detail"),
            productPrice = productItem.find(".price"),
            comparePrice = productItem.find(".old-price"),
            form2 = jQuery(".soluong1"),
            status = productItem.find(".soluong"),
            sku = productItem.find(".sku_"),
            totalPrice = productItem.find(".total-price span");

        if (variant && variant.sku) {
            sku.text(variant.sku);
        } else {
            sku.text("Đang cập nhật");
        }
        if (variant && variant.available) {
            var form = jQuery("#" + selector.domIdPrefix).closest("form");
            for (var i = 0, length = variant.options.length; i < length; i++) {
                var radioButton = form.find(
                    '.swatch[data-option-index="' +
                    i +
                    '"] :radio[value="' +
                    variant.options[i] +
                    '"]'
                );
                if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                }
            }

            addToCart.removeClass("disabled").removeAttr("disabled");
            addToCart
                .html(
                    '<span class="btn-image"></span><span class="btn-content text_1">Thêm vào giỏ hàng</span>'
                )
                .removeAttr("disabled");
            status.text("Còn hàng");
            if (variant.price < 1) {
                $("#quick-view-product .price").html("Liên hệ");
                $(
                    "#quick-view-product del, #quick-view-product .quantity_wanted_p"
                ).hide();
                $("#quick-view-product .prices .old-price").hide();
                form2.hide();
            } else {
                productPrice.html(
                    Haravan.formatMoney(variant.price)
                );
                if (variant.compare_at_price > variant.price) {
                    comparePrice
                        .html(
                            Haravan.formatMoney(variant.compare_at_price)
                        )
                        .show();
                    productPrice.addClass("on-sale");
                } else {
                    comparePrice.hide();
                    productPrice.removeClass("on-sale");
                }

                $(".quantity_wanted_p").show();
                $(".input_qty_qv_").show();
                form2.show();
            }

            updatePricingQuickView();

            /*begin variant image*/
            if (variant && variant.featured_image) {
                var originalImage = $("#product-featured-image-quickview");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Haravan.Image.switchImage(
                    newImage,
                    element,
                    function(newImageSizedSrc, newImage, element) {
                        $("#thumblist_quickview img").each(function() {
                            var parentThumbImg = $(this).parent();
                            var productImage = $(this).parent().data("image");
                            if (newImageSizedSrc.includes(productImage)) {
                                $(this).parent().trigger("click");
                                return false;
                            }
                        });
                    }
                );
                $("#product-featured-image-quickview").attr(
                    "src",
                    variant.featured_image.src
                );
            }
        } else {
            addToCart.addClass("disabled").attr("disabled", "disabled");
            addToCart
                .removeClass("hidden")
                .addClass("btn_buy")
                .attr("disabled", "disabled")
                .html('<div class="disabled">Hết hàng</div>')
                .show();
            status.text("Hết hàng");
            $(".quantity_wanted_p").show();
            if (variant) {
                if (variant.price < 1) {
                    $("#quick-view-product .price").html("Liên hệ");
                    $("#quick-view-product del").hide();
                    $("#quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                    form2.hide();
                    comparePrice.hide();
                    productPrice.removeClass("on-sale");
                    addToCart.addClass("disabled").attr("disabled", "disabled");
                    addToCart
                        .removeClass("hidden")
                        .addClass("btn_buy")
                        .attr("disabled", "disabled")
                        .html('<div class="disabled">Hết hàng</div>')
                        .show();
                } else {
                    if (variant.compare_at_price > variant.price) {
                        comparePrice
                            .html(
                                Haravan.formatMoney(variant.compare_at_price)
                            )
                            .show();
                        productPrice.addClass("on-sale");
                    } else {
                        comparePrice.hide();
                        productPrice.removeClass("on-sale");
                        $("#quick-view-product .prices .old-price").html("");
                    }
                    $("#quick-view-product .price").html(
                        Haravan.formatMoney(variant.price)
                    );
                    $("#quick-view-product del ").hide();
                    $("#quick-view-product .prices .old-price").show();
                    $(".input_qty_qv_").hide();
                    form2.hide();
                    addToCart.addClass("disabled").attr("disabled", "disabled");
                    addToCart
                        .removeClass("hidden")
                        .addClass("btn_buy")
                        .attr("disabled", "disabled")
                        .html('<div class="disabled">Hết hàng</div>')
                        .show();
                }
            } else {
                $("#quick-view-product .price").html("Liên hệ");
                $("#quick-view-product del").hide();
                $("#quick-view-product .quantity_wanted_p").hide();
                $("#quick-view-product .prices .old-price").hide();
                form2.hide();
                comparePrice.hide();
                productPrice.removeClass("on-sale");
                addToCart.addClass("disabled").attr("disabled", "disabled");
                addToCart
                    .removeClass("hidden")
                    .addClass("btn_buy")
                    .attr("disabled", "disabled")
                    .html('<div class="disabled">Hết hàng</div>')
                    .show();
            }
        }
        /*begin variant image*/
        if (variant && variant.featured_image) {
            var originalImage = $("#product-featured-image-quickview");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Haravan.Image.switchImage(
                newImage,
                element,
                function(newImageSizedSrc, newImage, element) {
                    $("#thumblist_quickview img").each(function() {
                        var parentThumbImg = $(this).parent();
                        var productImage = $(this).parent().data("image");
                        if (newImageSizedSrc.includes(productImage)) {
                            $(this).parent().trigger("click");
                            return false;
                        }
                    });
                }
            );
            $("#product-featured-image-quickview").attr(
                "src",
                variant.featured_image.src
            );
        }
    };
</script>
<script type="text/javascript" defer src="../theme.hstatic.net/200000295082/1000772075/14/quickviewc353.js?v=586">
</script>

<script type="text/x-custom-template" data-template="ItemDropCart">
    <li class="item productid-${id_item}">
        <div class="border_list"><div class="image_drop">
            <a class="product-image pos-relative embed-responsive embed-responsive-1by1" href="${url}" title="${title}">
                <img alt="${title}" src="${image_url}"width="'+ '100' +'"\>
            </a>
            </div>
            <div class="detail-item">
                <div class="product-details">
                    <span href="javascript:;" data-id="${id_item}" title="Xóa" class="remove-item-cart fa fa-times"></span>
                    <p class="product-name"> <a href="${url}" title="${title}">${title}</a></p></div>
                    <span class="variant-title">${variant_title}</span>
                <div class="product-details-bottom"><span class="price">${price}</span>
                    <span class="quanlity">x ${quanty}</span>
                    <div class="quantity-select qty_drop_cart d-none">
                        <input class="variantID" type="hidden" name="id" value="${id_item}">
                        <button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} ) &amp;&amp; qty${id_item} &gt; 1 ) result.value--;return false;" class="btn btn_reduced reduced items-count btn-minus" ${buttonQty} type="button">–</button>
                        <input type="text" maxlength="3" min="1" readonly class="form-control input-text number-sidebar qty${id_item}" id="qty${id_item}" name="updates[]" id="updates_${id_item}" size="4" value="${quanty}">
                        <button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} )) result.value++;return false;" class=" btn btn_increase increase items-count btn-plus" type="button">+</button>
                    </div>
                </div>
            </div>
        </div>
    </li>
</script>
<script type="text/x-custom-template" data-template="HeaderCartPc">
    <div class="cart page_cart hidden-xs hidden-sm row">
        <form action="/cart" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
            <div class="bg-scroll">
                <div class="cart-thead">
                    <div style="width: 18%" class="a-center">Ảnh sản phẩm</div>
                    <div style="width: 32%" class="a-center">Tên sản phẩm</div>
                    <div style="width: 17%" class="a-center">Đơn giá</div>
                    <div style="width: 14%" class="a-center">Số lượng</div>
                    <div style="width: 14%" class="a-center">Thầnh tiền</div>
                    <div style="width: 5%" class="a-center">Xóa</div>
                </div>
                <div class="cart-tbody">
                </div>
            </div>
        </form>
    </div>
  </script>
<script type="text/x-custom-template" data-template="pageCartCheckout">
    <div class="col-lg-7 col-md-7">
        <a href="/" class="form-cart-continue">Tiếp tục mua hàng</a>
    </div>
    <div class="col-lg-5 col-md-5">
        <div class="section bg_cart shopping-cart-table-total">
            <div class="table-total">
                <table class="table">
                    <tr>
                        <td coldspan="20" class="total-text">Tổng tiền thanh toán: </td>
                        <td class="txt-right totals_price price_end a-right">${price_total}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="section continued">
            <a href="/checkout" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
        </div>
    </div>
  </script>

<script type="text/x-custom-template" data-template="pageCartItem">
    <div class="item-cart productid-${id_item}">
        <div style="width: 18%" class="image">
            <a class="product-image a-left" title="${title}" href="${url}">
                <img width="75" height="auto" alt="${title}" src="${image_url}">
            </a>
        </div>
        <div style="width: 32%" class="a-center">
            <h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
            ${title}</a> </h3>
            <span class="variant-title">${variant_title}</span>
            <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
                <span><i class="fa fa-times"></i></span>
            </a>
        </div>
        <div style="width: 17%" class="a-center">
            <span class="cart-prices">
                <span class="prices">${price}</span>
            </span>
        </div>
        <div style="width: 14%" class="a-center">
            <div class="input_qty_pr">
                <input class="variantID" type="hidden" name="id" value="${id_item}">
                <button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} ) &amp;&amp; qtyItem${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="reduced_pop items-count btn-minus" type="button">-</button>
                <input type="text" maxlength="3" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem${id_item}" id="qtyItem${id_item}" name="updates[]" id="updates_${id_item}" size="4" value="${quanty}">
                <button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
            </div>
        </div>
        <div style="width: 14%" class="a-center">
            <span class="cart-price">
                <span class="price">${price_quanty}</span>
            </span>
        </div>
        <div style="width: 5%" class="a-center">
            <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
                <span><i class="fa fa-trash-alt"></i></span>
            </a>
        </div>
    </div>
  </script>

<script type="text/x-custom-template" data-template="ItemCartMobile">
    <div class="item-product item productid-${id_item} ">
        <div>
            <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
                Xóa
            </a>
        </div>
        <div class="item-product-cart-mobile">
             <a href="${url}" class="product-images1  pos-relative embed-responsive embed-responsive-1by1" href=""  title="${title}">
              <img class="img-fluid" src="${image_url}" alt="${title}">
          </a>
        </div>
        <div class="product-cart-infor">
        <div class="title-product-cart-mobile">
            <h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
            ${title}</a>  </h3>
            <span class="variant-title">${variant_title}</span>
        </div>

        <div class="cart-price">
            <span class="product-price price">${price_quanty}</span>
        </div>
        <div class="select-item-qty-mobile">
            <div class="txt_center">
                <input class="variantID" type="hidden" name="id" value="${id_item}">
                <button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} ) &amp;&amp; qtyMobile${id_item} &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus btn" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" maxlength="3" readonly min="1" class="form-control input-text number-sidebar qtyMobile${id_item}" id="qtyMobile${id_item}" name="updates[]" id="updates_${id_item}" size="4" value="${quanty}" data-inventory="">
                <button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} )) result.value++;return false;" class="increase items-count btn-plus btn" type="button"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        </div>
    </div>
  </script>

<script
    type="text/x-custom-template"
    data-template="pageCartCheckoutMobile"
  >
        <div class="header-cart-price pl-md-4 pr-md-0">
        <div class="timedeli"></div>







    <div class="r-bill">
        <div class="checkbox">
            <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value='không'>
            <input type="checkbox" id="checkbox-bill" value="có"  class="regular-checkbox" />
            <label for="checkbox-bill" class="box"></label>
            <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
        </div>
        <div class="bill-field">
            <div class="form-group">
                <label>Tên công ty</label>
                <input type="text" class="form-control val-f"
                             name="attributes[company_name]"
                             value=""
                             placeholder="Tên công ty" >
            </div>
            <div class="form-group">
                <label>Mã số thuế</label>
                <input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)"
                             onpaste="handlePaste(event)"
                             class="form-control val-f val-n"
                             name="attributes[tax_code]"
                             value=""
                             placeholder="Mã số thuế">
            </div>
            <div class="form-group">
                <label>Địa chỉ công ty</label>
                <textarea type="text" class="form-control val-f" rows='5'
                                    name="attributes[company_address]"
                                    value=""
                                    placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
            </div>
            <div class="form-group">
                <label>Email nhận hoá đơn</label>
                <input type="email" class="form-control val-f val-email"
                             name="attributes[invoice_email]"
                             value=""
                             placeholder="Email nhận hoá đơn">
            </div>
        </div>
    </div>


            <div class="title-cart">
                <h3 class="text-xs-left">Tổng tiền</h3>
                <span class="text-xs-right  totals_price_mobile">${price_total}</span>
        <span class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)<span>		</div>

                  <div class='cart-limit-alert'
                         >
                        <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 100.000 đ

    Vui lòng chọn mua thêm sản phẩm
                </div>

            <div class="checkout">
                <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                        type="button" onclick="goToCheckout(event)">
                    <span>Tiến hành thanh toán</span></button>

            </div>
                <button class="btn btn-block btn-buymore" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
                <i class="fa fa-arrow-left "> </i>	<span> Tiếp tục mua hàng</span>
                </button>
        </div>
  </script>

<script type="text/x-custom-template" data-template="TemplateItemPopupCart">
    <div class="item-popup productid-${id_item}">
        <div style="width: 13%;" class="height image_ text-left">
            <div class="item-image">
                <a class="product-image" href="${url}" title="${title}">
                    <img alt="${title}" src="${image_url}"width="'+ '90' +'"\>
                </a>
            </div>
        </div>
        <div style="width:40%;" class="height text-left fix_info">
            <div class="item-info">
                <p class="item-name">
                    <a class="text2line textlinefix" href="${url}" title="${title}">${title}</a>
                </p>
                <span class="variant-title-popup">${variant_title}</span>
                <a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="${id_item}">
                    <i class="fa fa-times"></i>&nbsp;&nbsp;Bỏ sản phẩm
                </a>
                <p class="addpass" style="color:#fff;margin:0px;">${id_item}</p>
            </div>
        </div>
        <div style="width: 15%;" class="height text-center">
            <div class="item-price">
                <span class="price">${price}</span>
            </div>
        </div>
        <div style="width: 15%;" class="height text-center">
            <div class="qty_h check_">
                <input class="variantID" type="hidden" name="id" value="${id_item}">
                <button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} ) &amp;&amp; qtyItemP${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="num1 reduced items-count btn-minus" type="button">-</button>
                <input type="text" maxlength="3" min="0" readonly class="input-text number-sidebar qtyItemP${id_item}" id="qtyItemP${id_item}" name="updates[]" id="updates_${id_item}" size="4" value="${quanty}">
                <button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} )) result.value++;return false;" class="num2 increase items-count btn-plus" type="button">+</button>
            </div>
        </div>
        <div style="width: 17%;" class="height text-center">
            <span class="cart-price">
                <span class="price">${price_quanty}</span>
            </span>
        </div>
    </div>
  </script>

<div id="popup-cart" class="popcart">
    <div id="popup-cart-desktop" class="clearfix">
        <div class="title-popup-cart">
            <img src="../theme.hstatic.net/200000295082/1000772075/14/ico_check_c353.png?v=586" alt="" />
            <span class="your_product">
                Bạn đã thêm [<span class="cart-popup-name" style="color: red"></span>] vào giỏ hàng</span>
        </div>
        <div class="wrap_popup">
            <div class="title-quantity-popup">
                <span class="cart_status" onclick="window.location.href='cart.html';">
                    Giỏ hàng của bạn có <span class="cart-popup-count"></span> sản
                    phẩm
                </span>
            </div>
            <div class="content-popup-cart">
                <!-- <div class="thead-popup">
                  <div style="width: 53%;" class="text-left">Sản phẩm</div>
                  <div style="width: 15%;" class="text-center">Đơn giá</div>
                  <div style="width: 15%;" class="text-center">Số lượng</div>
                  <div style="width: 17%;" class="text-center">Thành tiền</div>
              </div> -->
                <div class="tbody-popup scrollbar-dynamic"></div>
                <div class="tfoot-popup">
                    <div class="tfoot-popup-1 clearfix">
                        <div class="popup-ship"></div>
                        <span class="total-p popup-total">Tổng tiền thanh toán: <span
                                class="total-price"></span></span>
                    </div>
                    <div class="tfoot-popup-2 clearfix">
                        <a class="button btn-continue close-pop" title="Tiếp tục mua hàng" href="javascript:;"
                            onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
                        <a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán"
                            href="cart.html"><span>Thực hiện thanh toán</span></a>
                    </div>
                </div>
            </div>
            <a title="Close" class="close-modal quickview-close close-pop" href="javascript:;"
                onclick="$('#popup-cart').modal('hide');"><i class="fa fa-close"></i></a>
        </div>
    </div>
</div>
<script>
    var GLOBAL = {
        common: {
            init: function() {
                $(document).on("click", ".add_to_cart", addToCart);
            },
        },
        templateIndex: {
            init: function() {},
        },
        templateProduct: {
            init: function() {},
        },
        templateCart: {
            init: function() {},
        },
    };
    var UTIL = {
        fire: function(func, funcname, args) {
            var namespace = GLOBAL;
            funcname = funcname === undefined ? "init" : funcname;
            if (
                func !== "" &&
                namespace[func] &&
                typeof namespace[func][funcname] == "function"
            ) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            var bodyId = document.body.id;
            UTIL.fire("common");
            $.each(document.body.className.split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, bodyId);
            });
        },
    };
    $(document).ready(UTIL.loadEvents);
    Number.prototype.formatMoney = function(c, d, t) {
        var n = this,
            c = isNaN((c = Math.abs(c))) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "." : t,
            s = n < 0 ? "-" : "",
            i = parseInt((n = Math.abs(+n || 0).toFixed(c))) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return (
            s +
            (j ? i.substr(0, j) + t : "") +
            i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) +
            (c ?
                d +
                Math.abs(n - i)
                .toFixed(c)
                .slice(2) :
                "")
        );
    };

    function addToCart(e) {
        if (typeof e !== "undefined") e.preventDefault();
        var $this = $(this);
        var form = $this.parents("form");
        $.ajax({
            type: "POST",
            url: "/cart/add.js",
            async: false,
            data: form.serialize(),
            dataType: "json",
            error: addToCartFail,
            beforeSend: function() {},
            success: addToCartSuccess,
            cache: false,
        });
    }

    function qty() {
        var dqty = $("#qtym").val();
        if (dqty == undefined) {
            return 1;
        }
        return dqty;
    }

    function addToCartSuccess(jqXHR, textStatus, errorThrown) {
        var url_product = jqXHR["url"];
        var class_id = jqXHR["product_id"];
        var name = jqXHR["title"];
        var textDisplay =
            '<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng';
        var id = jqXHR["variant_id"];
        var dataList = $(".item-name a")
            .map(function() {
                var plus = $(this).text();
                return plus;
            })
            .get();
        $(".title-popup-cart .cart-popup-name").html(
            '<a href="' + url_product + '" title="' + name + '">' + name + "</a> "
        );
        var nameid = dataList,
            found = $.inArray(name, nameid);
        var textfind = found;

        var src = "";
        if (
            !jqXHR["image"] ||
            (Haravan.resizeImage(jqXHR["image"], "small") == null ||
                Haravan.resizeImage(jqXHR["image"], "small") == "null" ||
                Haravan.resizeImage(jqXHR["image"], "small")) == ""
        ) {
            src = no_image_placeholder;
        } else {
            src = Haravan.resizeImage(jqXHR["image"], "small");
        }

        $(".item-info > p:contains(" + id + ")").html(
            '<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>'
        );

        var va_title = jqXHR["variant_options"]
            .filter((opt) => opt != "Default Title")
            .join(", ");
        var windowW = $(window).width();
        awe.hidePopup(".loading");

        $("#popup-cart").addClass("opencart");
        $("body").addClass("opacitycart");
        $("#popup-cart").addClass("opencart");
        $("body").addClass("opacitycart");
        $("#popupCartModal").html("");
        var $popupMobile =
            "" +
            '<div class="modal-dialog">' +
            '<div class="modal-content">' +
            '<button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>' +
            '<div class="row row-noGutter"><div class="modal-left col-sm-12 col-lg-12 col-md-12">' +
            '<h3 class="modal-title"><svg width="18" height="18" class="mb-1"><g fill="none" fill-rule="evenodd" stroke="#0d5302" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.455" transform="translate(1 1)"><path d="M3.636 8l2.91 2.91 5.818-5.82"></path><circle cx="8" cy="8" r="8"></circle></g></svg> Sản phẩm vừa được thêm <span class="hidden-xs">vào giỏ hàng</span></h3>' +
            '<div class="modal-body"><div class="media"><div class="media-left thumb_img"><div class="thumb-1x1">' +
            '<img src="' +
            src +
            '" alt="' +
            jqXHR["title"] +
            '"></div></div>' +
            '<div class="media-body body_content"><div class="product-title">' +
            jqXHR["title"] +
            "</div>" +
            '<div class="product-new-price"><span>' +
            Haravan.formatMoney(jqXHR["price"], window.money_format) +
            "</span></div>" +
            '<div class="variant_title"><span>' +
            va_title +
            "</span></div>" +
            "</div></div>" +
            "</div>" +
            "</div>" +
            "</div></div>";
        $("#popupCartModal").html($popupMobile);
        $("#popupCartModal").modal();

        $.ajax({
            type: "GET",
            url: "/cart.js",
            async: false,
            cache: false,
            dataType: "json",
            success: function(cart) {
                setTimeout(() => {
                    addToCartEffect(
                        $("#popupCartModal .modal-body img").eq(0),
                        () => {
                            Haravan.updateCartFromForm(
                                cart,
                                ".top-cart-content .mini-products-list"
                            );
                            Haravan.updateCartPopupForm(
                                cart,
                                "#popup-cart-desktop .tbody-popup"
                            );
                            Haravan.updateCartPageFormMobile(
                                cart,
                                ".cart-mobile .header-cart-content"
                            );
                            $("#popupCartModal .close").click();
                        }
                    );
                }, 600);

                window.cart = cart;
            },
        });
    }

    function addToCartFail(jqXHR, textStatus, errorThrown) {
        var response = $.parseJSON(jqXHR.responseText);
        alert(response.description);
        var $info = '<div class="error">' + response.description + "</div>";
    }
    $(document).on("click", ".remove-item-cart", function() {
        var variantId = $(this).attr("data-id");
        removeItemCart(variantId);
    });
    $(document).on("click", ".items-count", function() {
        $(this).parent().children(".items-count").prop("disabled", true);
        var thisBtn = $(this);
        var variantId = $(this).parent().find(".variantID").val();
        var qty = $(this).parent().children(".number-sidebar").val();
        updateQuantity(qty, variantId);
    });

    $(document).on("change", ".number-sidebar", function() {
        var variantId = $(this).parent().children(".variantID").val();
        var qty = $(this).val();
        updateQuantity(qty, variantId);
    });

    function updateQuantity(qty, variantId) {
        var variantIdUpdate = variantId;
        $.ajax({
            type: "POST",
            url: "/cart/change.js",
            data: {
                quantity: qty,
                id: variantId
            },
            dataType: "json",
            success: function(cart, variantId) {
                Haravan.onCartUpdateClick(cart, variantIdUpdate);
                cart_min();
            },
            error: function(qty, variantId) {
                Haravan.onError(qty, variantId);
            },
        });
    }

    function removeItemCart(variantId) {
        var variantIdRemove = variantId;
        $.ajax({
            type: "POST",
            url: "/cart/change.js",
            data: {
                quantity: 0,
                id: variantId
            },
            dataType: "json",
            success: function(cart, variantId) {
                Haravan.onCartRemoveClick(cart, variantIdRemove);
                $(".productid-" + variantIdRemove).remove();
                if ($(".tbody-popup>div").length == "0") {
                    $("#popup-cart").removeClass("opencart");
                    $("body").removeClass("opacitycart");
                }
                if ($(".list-item-cart>li").length == "0") {
                    $(".mini-products-list").html(
                        '<div class="no-item"><p>Không có sản phẩm nào.</p></div>'
                    );
                }
                if ($(".cart-mobile .item-product").length == "0") {
                    $(".page_cart").remove();
                    $(".header-cart-content").remove();
                    $(".title_cart_pc").html(
                        '<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                    );
                    $(".cart-mobile .header-cart").html(`
                      <div class="alert green-alert section" role="alert">
                          <div class="title-cart ">
                              <h1>Giỏ hàng</h1><p>(Chưa có sản phẩm nào) nhấn vào <a href="/collections/all" title="cửa hàng" class="link text-primary">cửa hàng</a> để mua hàng</p>
                          </div>
                      </div>
                      `);
                }
                var productAction = $(
                    `.product-action-bottom[data-variant-id="${variantIdRemove}"]`
                );
                productAction.removeClass("added");
                $(
                    `.product-action-bottom[data-variant-id="${variantId}"] .qty`
                ).val(1);
                window.cart = cart;
            },
            error: function(variantId, r) {
                Haravan.onError(variantId, r);
            },
        });
    }

    function render(props) {
        return function(tok, i) {
            return i % 2 ? props[tok] : tok;
        };
    }
    Haravan.updateCartFromForm = function(
        cart,
        cart_summary_id,
        cart_count_id
    ) {
        if (typeof cart_summary_id === "string") {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {
                // Start from scratch.
                cart_summary.empty();
                // Pull it all out.
                jQuery.each(cart, function(key, value) {
                    if (key === "items") {
                        var table = jQuery(cart_summary_id);
                        if (value.length) {
                            jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                            jQuery.each(value, function(i, item) {
                                var buttonQty = "";
                                if (item.quantity == "1") {
                                    buttonQty = "disabled";
                                } else {
                                    buttonQty = "";
                                }
                                var link_img0 = item.image ?
                                    Haravan.resizeImage(item.image, "compact") :
                                    "";
                                if (
                                    link_img0 == "null" ||
                                    link_img0 == "" ||
                                    link_img0 == null
                                ) {
                                    link_img0 = no_image_placeholder;
                                }
                                if (item.variant_title == "Default Title") {
                                    var ItemDropCart = [{
                                        url: item.url,
                                        image_url: link_img0,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        id_item: item.variant_id,
                                        variant_title: "",
                                    }, ];
                                } else {
                                    let variant_title = item.variant_options ?
                                        item.variant_options
                                        .filter((opt) => opt != "Default Title")
                                        .join(", ") :
                                        "";
                                    var ItemDropCart = [{
                                        url: item.url,
                                        image_url: link_img0,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        id_item: item.variant_id,
                                        variant_title: variant_title == item.title ? "" :
                                            variant_title,
                                    }, ];
                                }
                                $(function() {
                                    var TemplateItemDropCart = $(
                                            'script[data-template="ItemDropCart"]'
                                        )
                                        .text()
                                        .split(/\$\{(.+?)\}/g);
                                    $(".list-item-cart").append(
                                        ItemDropCart.map(function(item) {
                                            return TemplateItemDropCart.map(render(
                                                item)).join(
                                                ""
                                            );
                                        })
                                    );
                                });
                            });
                            jQuery(
                                '<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' +
                                Haravan.formatMoney(
                                    cart.total_price,
                                    window.money_format
                                ) +
                                "</span></div></div>"
                            ).appendTo(table);
                            jQuery(
                                '<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>'
                            ).appendTo(table);
                        } else {
                            jQuery(
                                '<div class="no-item"><p>Không có sản phẩm nào.</p></div>'
                            ).appendTo(table);
                        }
                    }
                });
            }
        }
        updateCartDesc(cart);
        var numInput = document.querySelector("#cart-sidebar input.input-text");
        if (numInput != null) {
            // Listen for input event on numInput.
            numInput.addEventListener(
                "input",
                function() {
                    // Let's match only digits.
                    var num = this.value.match(/^\d+$/);
                    if (num == 0) {
                        // If we have no match, value will be empty.
                        this.value = 1;
                    }
                    if (num === null) {
                        // If we have no match, value will be empty.
                        this.value = "";
                    }
                },
                false
            );
        }
    };

    Haravan.updateCartPageForm = function(
        cart,
        cart_summary_id,
        cart_count_id
    ) {
        if (typeof cart_summary_id === "string") {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {
                // Start from scratch.
                cart_summary.empty();
                // Pull it all out.
                jQuery.each(cart, function(key, value) {
                    if (key === "items") {
                        var table = jQuery(cart_summary_id);
                        if (value.length) {
                            var HeaderCartPc = $('script[data-template="HeaderCartPc"]')
                                .text()
                                .split(/\$\{(.+?)\}/g);
                            var pageCartCheckout = $(
                                    'script[data-template="pageCartCheckout"]'
                                )
                                .text()
                                .split(/\$\{(.+?)\}/g);

                            $(table).append(function() {
                                return HeaderCartPc.map(render()).join("");
                            });

                            jQuery.each(value, function(i, item) {
                                var buttonQty = "";
                                if (item.quantity == "1") {
                                    buttonQty = "disabled";
                                } else {
                                    buttonQty = "";
                                }
                                var link_img1 = item.image ?
                                    Haravan.resizeImage(item.image, "compact") :
                                    "";
                                if (
                                    link_img1 == "null" ||
                                    link_img1 == "" ||
                                    link_img1 == null
                                ) {
                                    link_img1 = no_image_placeholder;
                                }

                                if (item.variant_title == "Default Title") {
                                    var ItemCartPage = [{
                                        url: item.url,
                                        image_url: link_img1,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        variant_title: item.variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                        variant_title: "",
                                    }, ];
                                } else {
                                    let variant_title = item.variant_options ?
                                        item.variant_options
                                        .filter((opt) => opt != "Default Title")
                                        .join(", ") :
                                        "";
                                    var ItemCartPage = [{
                                        url: item.url,
                                        image_url: link_img1,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        variant_title: variant_title == item.title ? "" :
                                            variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    }, ];
                                }

                                $(function() {
                                    var pageCartItem = $(
                                            'script[data-template="pageCartItem"]'
                                        )
                                        .text()
                                        .split(/\$\{(.+?)\}/g);
                                    $(table.find(".cart-tbody")).append(
                                        ItemCartPage.map(function(item) {
                                            return pageCartItem.map(render(item))
                                                .join("");
                                        })
                                    );
                                });
                            });

                            var PriceTotalCheckout = [{
                                price_total: Haravan.formatMoney(
                                    cart.total_price,
                                    window.money_format
                                ),
                            }, ];
                            $(table.children(".cart")).append(
                                PriceTotalCheckout.map(function(item) {
                                    return pageCartCheckout.map(render(item)).join("");
                                })
                            );
                        } else {
                            jQuery(
                                '<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                            ).appendTo(table);
                            jQuery(".cart_desktop_page").css("min-height", "auto");
                        }
                    }
                });
            }
        }
        updateCartDesc(cart);
        jQuery("#wait").hide();
    };
    Haravan.updateCartPopupForm = function(
        cart,
        cart_summary_id,
        cart_count_id
    ) {
        if (typeof cart_summary_id === "string") {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {
                // Start from scratch.
                cart_summary.empty();
                // Pull it all out.
                jQuery.each(cart, function(key, value) {
                    if (key === "items") {
                        var table = jQuery(cart_summary_id);
                        if (value.length) {
                            jQuery.each(value, function(i, item) {
                                var src = item.image;
                                if (src == null) {
                                    src = no_image_placeholder;
                                }
                                var buttonQty = "";
                                if (item.quantity == "1") {
                                    buttonQty = "disabled";
                                } else {
                                    buttonQty = "";
                                }

                                if (item.variant_title == "Default Title") {
                                    var ItemPopupCart = [{
                                        url: item.url,
                                        image_url: src,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        quanty: item.quantity,
                                        variant_title: "",
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    }, ];
                                } else {
                                    let variant_title = item.variant_options ?
                                        item.variant_options
                                        .filter((opt) => opt != "Default Title")
                                        .join(", ") :
                                        "";

                                    var ItemPopupCart = [{
                                        url: item.url,
                                        image_url: src,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        quanty: item.quantity,
                                        variant_title: variant_title == item.title ? "" :
                                            variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    }, ];
                                }

                                $(function() {
                                    var TemplateItemPopupCart = $(
                                            'script[data-template="TemplateItemPopupCart"]'
                                        )
                                        .text()
                                        .split(/\$\{(.+?)\}/g);
                                    $(table).append(
                                        ItemPopupCart.map(function(item) {
                                            return TemplateItemPopupCart.map(render(
                                                item)).join(
                                                ""
                                            );
                                        })
                                    );
                                });

                                $(".link_product").text();
                            });
                        }
                    }
                });
            }
        }
        jQuery(".total-price").html(
            Haravan.formatMoney(cart.total_price, window.money_format)
        );
        updateCartDesc(cart);
    };
    Haravan.updateCartPageFormMobile = function(
        cart,
        cart_summary_id,
        cart_count_id
    ) {
        if (typeof cart_summary_id === "string") {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {
                // Start from scratch.
                cart_summary.empty();
                // Pull it all out.
                if (cart.items && cart.items.length) {
                    var table = jQuery(cart_summary_id);
                    jQuery(
                        '<div class="cart_page_mobile content-product-list"></div>'
                    ).appendTo(table);
                    jQuery.each(cart.items, function(i, item) {
                        if (item.image) {
                            var src = Haravan.resizeImage(item.image, "compact");
                        } else {
                            var src = no_image_placeholder;
                        }
                        let variant_title = item.variant_options ?
                            item.variant_options
                            .filter((opt) => opt != "Default Title")
                            .join(", ") :
                            "";

                        var ItemCartPageMobile = [{
                            url: item.url,
                            image_url: src,
                            price: Haravan.formatMoney(item.price, window.money_format),
                            title: item.title,
                            quanty: item.quantity,
                            variant_title: variant_title == item.title ? "" : variant_title,
                            price_quanty: Haravan.formatMoney(
                                item.price * item.quantity,
                                window.money_format
                            ),
                            id_item: item.variant_id,
                        }, ];

                        var pageCartItemMobile = $(
                                'script[data-template="ItemCartMobile"]'
                            )
                            .text()
                            .split(/\$\{(.+?)\}/g);
                        $(table.children(".content-product-list")).append(
                            ItemCartPageMobile.map(function(item) {
                                return pageCartItemMobile.map(render(item)).join("");
                            })
                        );
                    });

                    var pageCartCheckoutMobile = $(
                            'script[data-template="pageCartCheckoutMobile"]'
                        )
                        .text()
                        .split(/\$\{(.+?)\}/g);
                    var PriceTotalCheckoutMobile = [{
                        price_total: Haravan.formatMoney(
                            cart.total_price,
                            window.money_format
                        ),
                    }, ];
                    $(table).append(
                        PriceTotalCheckoutMobile.map(function(item) {
                            return pageCartCheckoutMobile.map(render(item)).join("");
                        })
                    );
                    $(".cart_page_mobile").append(`<div class="cart-note">
                  <label for="note" class="note-label">Ghi chú đơn hàng</label>
                  <textarea id="note" name="note" rows="8"></textarea>
                  </div>`);
                }
            }
        }
        updateCartDesc(cart);
    };

    function updateCartDesc(data) {
        var $cartPrice = Haravan.formatMoney(
                data.total_price,
                window.money_format
            ),
            $cartMobile = $("#header .cart-mobile .quantity-product"),
            $cartDesktop = $(".count_item_pr, .count_sidebar, .cart-popup-count"),
            $cartDesktopList = $(".cart-counter-list"),
            $cartPopup = $(".cart-popup-count");

        switch (data.item_count) {
            case 0:
                $cartMobile.text("0");
                $cartDesktop.text("0");
                $cartDesktopList.text("0");
                $cartPopup.text("0");

                break;
            case 1:
                $cartMobile.text("1");
                $cartDesktop.text("1");
                $cartDesktopList.text("1");
                $cartPopup.text("1");

                break;
            default:
                $cartMobile.text(data.item_count);
                $cartDesktop.text(data.item_count);
                $cartDesktopList.text(data.item_count);
                $cartPopup.text(data.item_count);

                break;
        }
        $(
            ".top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price"
        ).html($cartPrice);
        $(".popup-total .total-price").html($cartPrice);
        $(
            ".shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar"
        ).html($cartPrice);
        $(".header-cart-price .totals_price_mobile").html($cartPrice);
        $(".cartCount, .cart-popup-count, #ega-cart-count").html(
            data.item_count
        );
    }

    Haravan.onCartUpdate = function(cart) {
        Haravan.updateCartFromForm(cart, ".mini-products-list");
        Haravan.updateCartPopupForm(cart, "#popup-cart-desktop .tbody-popup");
    };
    Haravan.onCartUpdateClick = function(cart, variantId) {
        jQuery.each(cart, function(key, value) {
            if (key === "items") {
                jQuery.each(value, function(i, item) {
                    if (item.variant_id == variantId) {
                        $(".productid-" + variantId)
                            .find(".cart-price span.price")
                            .html(
                                Haravan.formatMoney(
                                    item.price * item.quantity,
                                    window.money_format
                                )
                            );
                        $(".productid-" + variantId)
                            .find(".items-count")
                            .prop("disabled", false);
                        $(".productid-" + variantId)
                            .find(".number-sidebar")
                            .prop("disabled", false);
                        $(".productid-" + variantId + " .number-sidebar").val(
                            item.quantity
                        );
                        $(
                            `.list-item-cart .item.productid-${variantId} .quanlity`
                        ).text(`x ${item.quantity}`);
                        if (item.quantity == "1") {
                            $(".productid-" + variantId)
                                .find(".items-count.btn-minus")
                                .prop("disabled", true);
                        }
                    }
                });
            }
        });

        updateCartDesc(cart);
    };
    Haravan.onCartRemoveClick = function(cart, variantId) {
        jQuery.each(cart, function(key, value) {
            if (key === "items") {
                jQuery.each(value, function(i, item) {
                    if (item.variant_id == variantId) {
                        $(".productid-" + variantId).remove();
                    }
                });
            }
        });
        updateCartDesc(cart);
    };
    $(window).ready(function() {
        $.ajax({
            type: "GET",
            url: "/cart.js",
            async: false,
            cache: false,
            dataType: "json",
            success: function(cart) {
                window.cart = cart;

                Haravan.updateCartFromForm(cart, ".mini-products-list");
                Haravan.updateCartPopupForm(
                    cart,
                    "#popup-cart-desktop .tbody-popup"
                );

                var head = document.getElementsByTagName("head").item(0);
                var script = document.createElement("script");
                script.setAttribute(
                    "src",
                    "../mixcdn.egany.com/themes/delivery-builtin/index.min.js"
                );
                head.appendChild(script);
            },
        });

        var wDWs = $(window).width();
        if (wDWs < 1199) {
            $(".top-cart-content").remove();
        }
    });
    Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown =
        function(options) {
            if (
                this.selectors &&
                this.selectors.length &&
                this.selectors.length > 0
            ) {
                this.selectors[0].element.onchange(options);
            }
        };

    function productQuickAddCart() {
        const productAction = ".product-action-bottom";
        const qty = ".qty";
        const minus = ".num_1";
        const plus = ".num_2";
        $(document).on(
            "click",
            ".product-action-bottom .add_to_cart",
            function(e) {
                var result = $(e.currentTarget).parents(productAction);
                if (result.find(qty).length) {
                    result.addClass("added");
                }
            }
        );
        $(document).on("click", ".product-action-bottom .num_1", function(e) {
            const parent = $(e.currentTarget).parents(productAction);
            const variantId = parent.data("variantId");
            var result = $(
                `.product-action-bottom[data-variant-id="${variantId}"] ${qty}`
            );
            var qtypro = +result.val();
            if (!isNaN(qtypro) && qtypro > 1) {
                result.val(--qtypro);
                updateQuantity(qtypro, variantId);
            } else {
                removeItemCart(variantId);
            }

            return false;
        });
        $(document).on("click", ".product-action-bottom .num_2", function(e) {
            const parent = $(e.currentTarget).parents(productAction);
            const variantId = parent.data("variantId");
            var result = $(
                `${productAction}[data-variant-id="${variantId}"] ${qty}`
            );
            var qtypro = +result.val();
            var max = result.attr("max");
            if (!isNaN(qtypro)) {
                let qty = qtypro + 1;
                if (max && qty > +max) {
                    qty = max;
                    alertInvalidQty(qty);
                }
                result.val(qty);
                updateQuantity(qtypro, variantId);
            }
            return false;
        });
        $(`${productAction}[data-variant-id]`).each(function() {
            if (!window.cart && !window.cart.items) return;
            const variantId = $(this).data("variantId");
            const result = $(this).find(qty);
            result.keypress((e) => {
                if (e.keyCode == 13) return false;
            });
            result.on("input", () => {
                var max = result.attr("max");
                var qty = result.val();
                if (max && qty > +max) {
                    qty = max;
                    result.val(max);
                    alertInvalidQty(qty);
                }
                updateQuantity(qty, variantId);
            });
            const item = window.cart.items.find(
                (item) => item.variant_id == variantId
            );
            if (item && !$(this).hasClass("soldout") && result.length) {
                $(this).addClass("added");
                result.val(item.quantity);
            }
        });
    }

    function productsCallback() {
        awe_lazyloadImage();

        if (window.BPR && window.BPR.loadBadges) {
            window.BPR.initDomEls();
            window.BPR.loadBadges();
        }
    }

    function cart_min() {
        var sts = true;
        $.ajax({
            type: "GET",
            url: "/cart.js",
            async: false,
            success: function(data) {
                var cart = data.total_price + "";
                cart = parseInt(cart.substring(0, cart.length - 2));
                var cart_compare = parseInt(100000);
                if (cart < cart_compare) {
                    $(".btn-proceed-checkout-mobile").addClass("disabled");
                    $(".cart-limit-alert").css("display", "block");
                    sts = false;
                } else {
                    $(".btn-proceed-checkout-mobile").removeClass("disabled");
                    $(".cart-limit-alert").css("display", "none");
                }
            },
        });
        return sts;
    }

    function alertInvalidQty(qty) {
        alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`);
    }

    function validateQty(product, variantId, qty) {
        let isInValidQty = false;
        /** check variant **/
        let variant =
            product && product.variants.find((item) => item.id == variantId);
        if (
            variant &&
            variant.inventory_management === "haravan" &&
            variant.inventory_policy == "deny"
        ) {
            isInValidQty = qty > variant.inventory_quantity;
            isInValidQty && alertInvalidQty(variant.inventory_quantity);
            return isInValidQty ? variant.inventory_quantity : false;
        }
        return isInValidQty;
    }

    function addToCartEffect(imgtodrag, callback) {
        var cart = $(".cartgroup");
        if ($(".header_sticky").hasClass("active")) {
            cart = $(".header_sticky .cartgroup");
        }
        if (imgtodrag) {
            var imgclone = imgtodrag
                .clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left,
                })
                .addClass("fly-animate-img")
                .appendTo($("body"))
                .animate({
                        top: cart.offset().top + 10,
                        left: cart.offset().left + 10,
                        width: 75,
                        height: 75,
                    },
                    340,
                    "swing"
                );
            imgclone.animate({
                    width: 0,
                    height: 0,
                },
                function() {
                    callback();
                    $(this).detach();
                }
            );
        }
    }

    $(document).ready(function() {
        cart_min();
    });
</script>

<script src="../theme.hstatic.net/200000295082/1000772075/14/jquery-mailchimpc353.js?v=586" defer></script>
<script src="../theme.hstatic.net/200000295082/1000772075/14/mainc353.js?v=586" type="text/javascript"></script>

<script src="../theme.hstatic.net/200000295082/1000772075/14/indexc353.js?v=586" type="text/javascript"></script>

<script src="../theme.hstatic.net/200000295082/1000772075/14/ega-gateway-minc353.js?v=586" type="text/javascript">
</script>
<script>
    var cro_show = true,
        cro_addcart_show = true,
        cro_cart_show = true,
        cro_addcart_title = "Thêm vào giỏ",
        cro_addcart_bg_1 = "#ff5722",
        cro_addcart_bg_2 = "#ff5722",
        cro_addcart_color = "#fff",
        cro_price_color = "#f3283d",
        cro_variant_color = "#008848",
        cro_cta_bg = "",
        cro_cta_color = "",
        cro_addcart_modal_mess = "Tiến hành thanh toán",
        cro_addcart_modal_redirect = "",
        cro_modal_btn_text = "",
        cro_modal_btn_bg = "",
        cro_modal_btn_color = "",
        cro_hotline_show = true,
        cro_hotline_number = "0999999999",
        cro_mess_show = true,
        cro_mess_url = "https://m.me/EGAnyTech",
        cro_home_show = true,
        cro_home_title = "Ưu đãi",
        cro_home_url = "/collections/trai-cay-viet-nam",
        cro_coll_title = "Sản phẩm",
        cro_coll_url = "/collections/all",
        cro_blog_title = "Tin tức",
        cro_blog_url = "/blogs/tin-tuc-2",
        cro_general_color = "#008848",
        cro_product_color = "#008848",
        cro_background_color = "#fff";

    window.EGACRAddonSettings = {
        general: {
            enabled: cro_show,
            iconWidth: 20,
            background: cro_background_color,
            color: cro_general_color,
            activeColor: cro_general_color,
            activeBackground: cro_background_color,
            screenSize: [{
                name: "mobile"
            }],
            styleAddon: "shopee",
            productBackground: "#ffffff",
            productColor: cro_product_color,
            ignorePages: [],
            bodyOffset: 54,
            conflictEl: "#ega-hotline,.fb_dialog.fb_dialog_advanced",
            skipEl: ".button-popup-loyalty",
            desktop: {
                x: "right",
                y: 50
            },
        },
        products: {
            enabled: cro_cart_show || cro_addcart_show,
            cart: {
                enabled: cro_cart_show,
                icon: "https://file.hstatic.net/1000405773/file/egaproductscarticon_67abb816c5fc457a9de536aa009b6db2.svg",
                title: "Giỏ hàng",
                url: "/cart",
            },
            buyNowBtn: {
                enabled: false,
                title: "Mua ngay",
                color: "#ffffff",
                background: "#ffd001",
                backgroundEnd: "#ff9b30",
            },
            addToCartBtn: {
                enabled: cro_addcart_show,
                title: cro_addcart_title,
                color: "#ffffff",
                background: cro_addcart_bg_1,
                loadingColor: "",
                icon: "",
                backgroundEnd: cro_addcart_bg_2,
                cartQuery: ".count_item_pr,.count-holder .count",
            },
            modal: {
                enabled: true,
                headerText: "Sản phẩm vừa được thêm vào giỏ hàng",
                ctaLink: "checkout",
                ctaText: cro_addcart_modal_mess,
                ctaBg: "#ff5722",
                ctaColor: "#fff",
            },
            qvProduct: {
                priceColor: cro_price_color,
                variantColor: cro_variant_color,
                ctaBg: "#ff5722",
                ctaColor: "#fff",
                useQty: true,
            },
        },
        pages: {
            enabled: cro_home_show,
            links: [{
                    url: cro_coll_url,
                    title: cro_coll_title,
                    icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_coll.png?v=586",
                },
                {
                    url: cro_blog_url,
                    title: cro_blog_title,
                    icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_blog.png?v=586",
                },

                {
                    url: cro_home_url,
                    title: cro_home_title,
                    icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_home.png?v=586",
                },
            ],
        },
        messenger: {
            enabled: cro_mess_show,
            icon: "https://file.hstatic.net/1000405773/file/egamessengericon_0986642a69264b65a9cdc5945bcd6e7e.svg",
            title: "Nhắn tin",
            url: cro_mess_url,
        },
        phone: {
            enabled: cro_hotline_show,
            icon: "https://file.hstatic.net/1000405773/file/egaphoneicon_35a3ab099cfc4ab0b99f31f40ffff8a3.svg",
            title: "Gọi điện",
            number: cro_hotline_number,
        },
        form: {
            enabled: false,
        },
    };
    let crAddonScript =
        "../theme.hstatic.net/200000295082/1000772075/14/ega.addon-cr-button.minc353.js?v=586";
    EGACRAddonSettings.general.currentTemplate = "index";
    EGACRAddonSettings.general.platform = Haravan;
    const platform = window.EGACRAddonSettings.general.platform;
    platform.addItem = function(variantId, quantity, callback, errHandle) {
        var quantity = quantity || 1,
            n = {
                type: "POST",
                url: "/cart/add.js",
                data: "quantity=" + quantity + "&id=" + variantId,
                dataType: "json",
                success: function(jqXHR, textStatus, errorThrown) {
                    $("#crQVModal").trigger("click");
                    $("#cr-addon-addtocart")
                        .removeClass("loading")
                        .removeAttr("disabled");
                    addToCartSuccess(jqXHR, textStatus, errorThrown);
                },
                error: function(a, r) {
                    errHandle(a, r);
                },
            };
        jQuery.ajax(n);
    };
    if (typeof EGA === "undefined") {
        EGA = {};
    }
    window.egaCRAddonValid = window.EGACRAddonSettings.general.enabled;

    $(document).ready(function($) {
        var isInit = false;
        $(window).on("scroll click mousemove touchstart", () => {
            if (!isInit) {
                isInit = true;
                $("body").append(
                    `<script src="${crAddonScript}" defer ><\/script>`
                );
            }
        });
    });
</script>
<!-- Add to cart -->
<div id="popupCartModal" class="modal fade" role="dialog"></div>

<script src="../theme.hstatic.net/200000295082/1000772075/14/ega.builtin.smartsearch.configsc353.js?v=586"
    type="text/javascript"></script>

<link rel="stylesheet" href="../theme.hstatic.net/200000295082/1000772075/14/addthis-sharingc353.css?v=586"
    media="print" onload="this.media='all'" />

<noscript>
    <link href="../theme.hstatic.net/200000295082/1000772075/14/addthis-sharingc353.css?v=586" rel="stylesheet"
        type="text/css" media="all" />
</noscript>
<div class="addThis_listSharing">
    <a href="#" id="back-to-top" class="backtop back-to-top d-flex align-items-center justify-content-center"
        title="Lên đầu trang">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>

    <ul class="addThis_listing list-unstyled d-none d-sm-block">
        <li class="addThis_item">
            <a class="addThis_item--icon" href="tel:0999999999 " rel="nofollow">
                <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219"
                            y2="40.5458" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#e8434c" offset="0" />
                            <stop offset="1" stop-color="#d61114" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
            </a>
        </li>
        <li class="addThis_item">
            <a class="addThis_item--icon" href="https://zalo.me/834141234794359440" target="_blank" rel="nofollow">
                <img class="img-fluid"
                    src="http://theme.hstatic.net/200000295082/1000772075/14/addthis-zalo.svg?v=586"
                    alt="Chat với chúng tôi qua Zalo" loading="lazy" width="44" height="44" />
                <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
            </a>
        </li>
    </ul>
</div>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    $(document).ready(() => {
        const page_id = "168389884826236";
        if (page_id && window.innerWidth > 600) {
            $(window).one(" mousemove touchstart scroll", () => {
                var chatbox = document.getElementById("fb-customer-chat");
                chatbox.setAttribute("page_id", page_id);
                chatbox.setAttribute("attribution", "biz_inbox");

                window.fbAsyncInit = function() {
                    FB.init({
                        xfbml: true,
                        version: "v12.0",
                    });
                };

                (function(d, s, id) {
                    var js,
                        fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src =
                        "../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
                    fjs.parentNode.insertBefore(js, fjs);
                })(document, "script", "facebook-jssdk");
            });
        }
    });
</script>

<div id="ega-sale-pop">
    <div class="sale-pop-wrap">
        <div class="sale-pop-img"></div>
        <div class="sale-pop-body">
            <div class="sale-pop-name"></div>
            <span class="sale-pop-desc"></span>
        </div>
    </div>
    <div class="sale-pop-close">✕</div>
</div>

<script>
    var salePopArr = new Array();

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_1ebd832010824a9ebcd05f17cf65d830_small.jpg",
        pd_title: "Bắp giò heo Vissan",
        pd_url: "/products/bap-gio-heo-vissan",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_aac4e68e76e54f20a251e309211e788c_small.jpg",
        pd_title: "Bí đỏ giống Nhật Đà Lạt",
        pd_url: "/products/bi-do-giong-nhat-da-lat",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_809c14b19b564db88de9d0b933df337c_small.jpg",
        pd_title: "Cá hồi phi lê 0.3 kg",
        pd_url: "/products/ca-hoi-phi-le-0-3-kg",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_c99f5b6546644b0ea9dd6726e2dc148f_small.jpg",
        pd_title: "Cá thác lác nạo 0,3 kg",
        pd_url: "/products/ca-thac-lac-nao-0-3-kg",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_a937e6a0917f48ed8af0078e567135ab_small.jpg",
        pd_title: "Cam vàng Navel nhập khẩu Ai Cập hộp 1kg (4 - 5 trái)",
        pd_url: "/products/cam-vang-navel-nhap-khau-ai-cap-hop-1kg-4-5-trai",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_99cea375549f4853a94303d55969efa7_small.jpg",
        pd_title: "Nạc đùi, vai heo Vissan",
        pd_url: "/products/nac-dui-vai-heo-vissan",
    });

    salePopArr.push({
        img_url: "//product.hstatic.net/200000295082/product/upload_0c4e3477e5194b309ee6e3a150498f01_small.jpg",
        pd_title: "Nho xanh không hạt Mỹ",
        pd_url: "/products/nho-xanh-khong-hat-my",
    });

    function showSalePop() {
        let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
            salePopProduct = salePopArr[pdRanIndex],
            randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;

        $("#ega-sale-pop .sale-pop-wrap .sale-pop-img").html(
            `<img src="${salePopProduct.img_url}"/>`
        );
        $("#ega-sale-pop .sale-pop-wrap .sale-pop-name").html(
            `<a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>`
        );
        $("#ega-sale-pop .sale-pop-wrap .sale-pop-desc").html(
            `Khách hàng vừa đặt mua cách đây ${randomMin}`
        );

        $("#ega-sale-pop").addClass("salepop-show");
        $("#ega-sale-pop")
            .delay(5000)
            .fadeIn(function() {
                $(this).removeClass("salepop-show");
            });
    }

    let timePerPop = 15000;
    let timeDelay = 15000;

    setTimeout(function() {
        setInterval(function() {
            showSalePop();
        }, 15000);
    }, timeDelay - timePerPop);

    $(".sale-pop-close").click(function() {
        $("#ega-sale-pop").css("opacity", "0");
    });
    $(".sale-pop-cta").click(function(e) {
        e.preventDefault();
        $(".sale-pop-regis").show();
    });
    $(".regis-close").click(function() {
        $(".sale-pop-regis").hide();
    });
</script>

<script src="../theme.hstatic.net/200000295082/1000772075/14/sweetalert.minc353.js?v=586"></script>

<script src="../theme.hstatic.net/200000295082/1000772075/14/js.cookie.minc353.js?v=586"></script>
