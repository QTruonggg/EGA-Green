@extends('frontend.components.index')
@section('content')

    @include('frontend.home.sidebar')


    {{-- menu khi scroll  --}}
    <script type="text/x-custom-template" data-template="stickyHeader">
      <link rel="stylesheet" href="{{asset('theme.hstatic.net/200000295082/1000772075/14/sticky-headerc353.css?v=586')}}" >

      <header class="header header_sticky">

      	<div class="mid-header wid_100 d-flex align-items-center">
      		<div class="container">

      			<div class="row align-items-center">
      				<div class="col-2 col-md-3 header-left d-lg-none d-block py-1">
      					<div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
      						<span class="bar"></span>
      						<span class="bar"></span>
      						<span class="bar"></span>
      					</div>
      				</div>
      				<div class="col-4 col-xl-3 col-lg-3  header-left d-none d-lg-flex align-items-center h-100">

      					<div class="toogle-nav-wrapper w-100 " >
      						<div class=" d-flex align-items-center" style="height: 52px;">
      							<div class="icon-bar btn menu-bar mr-2 ml-0 p-0 d-inline-flex">
      							<span class="bar"></span>
      							<span class="bar"></span>
      							<span class="bar"></span>
      						</div>
      						Danh mục sản phẩm
      						</div>

      						<div class="navigation-wrapper">
      							<nav>
      <ul  class="navigation list-group list-group-flush scroll">




      	<li class="menu-item list-group-item">
      		<a href="/" class="menu-item__link" title="TRANG CHỦ">

      			TRANG CHỦ
      		</a>


      			</li>




      	<li class="menu-item list-group-item">
      		<a href="/collections/all" class="menu-item__link" title="SẢN PHẨM">

      			SẢN PHẨM
      			<i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
      		</a>




      				<div class="submenu scroll">
      						<ul class="submenu__list">
      			</ul>
      		</div>
      			</li>
      	<li class="menu-item list-group-item">
      		<a href="/collections/san-pham-tet" class="menu-item__link" title="SẢN PHẨM TẾT">

      			SẢN PHẨM TẾT
      		</a>
      			</li>
      	<li class="menu-item list-group-item">
      		<a href="/" class="menu-item__link" title="SALES PAGE">
      			SALES PAGE
      			<i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
      		</a>
      				<div class="submenu scroll">
      						<ul class="submenu__list">
      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/pages/foodnbeverage-001" title="Food & Beverage">
      						Food & Beverage
      					</a>
      				</li>
      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/pages/blackfriday-001" title="Black Friday">
      						Black Friday
      					</a>
      				</li>
      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/pages/xmas-002" title="XMas 002">
      						XMas 002
      					</a>
      				</li>
      			</ul>
      		</div>
      			</li>




      	<li class="menu-item list-group-item">
      		<a href="/collections/san-pham-tet" class="menu-item__link" title="KHUYẾN MÃI HOT">

      			KHUYẾN MÃI HOT
      		</a>


      			</li>




      	<li class="menu-item list-group-item">
      		<a href="/blogs/tin-tuc-2" class="menu-item__link" title="TIN TỨC">

      			TIN TỨC
      			<i class='fas fa-chevron-right float-right' data-toggle-submenu></i>
      		</a>


      				<div class="submenu scroll">
      						<ul class="submenu__list">



      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/blogs/tin-tuc-2" title="Công thức nấu ăn">
      						Công thức nấu ăn
      					</a>
      				</li>




      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/blogs/tin-tuc-2" title="Công thức pha chế">
      						Công thức pha chế
      					</a>
      				</li>




      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/blogs/tin-tuc-2" title="Món ngon mỗi ngày">
      						Món ngon mỗi ngày
      					</a>
      				</li>




      				<li class="submenu__item submenu__item--main">
      					<a class="link" href="/blogs/tin-tuc-2" title="Món ăn healthy">
      						Món ăn healthy
      					</a>
      				</li>


      			</ul>
      		</div>
      			</li>




      	<li class="menu-item list-group-item">
      		<a href="/pages/about-us" class="menu-item__link" title="GIỚI THIỆU">

      			GIỚI THIỆU
      		</a>


      			</li>




      	<li class="menu-item list-group-item">
      		<a href="/pages/lien-he" class="menu-item__link" title="LIÊN HỆ">

      			LIÊN HỆ
      		</a>


      			</li>

      </ul>
      	</nav>
      						</div>

      					</div>
      					<div class="sticky-overlay">

      					</div>
      				</div>
      				<div class=" col-8 col-md-6 col-lg-3 col-xl-4 header-center py-1" id="search-header">
      						<form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
      						<input type="text" name="q" value="" autocomplete="off" placeholder="Tìm kiếm sản phẩm..."
      							   class="input-group-field auto-search form-control " required="">
      						<input type="hidden" name="type" value="product">
      						<span class="input-group-btn ">
      							<button type="submit" class="btn  icon-fallback-text h-100">
      								<span class="fa fa-search"></span>
      							</button>
      						</span>
      					</form>
      				</div>
      				<div class="col-2 col-md-3 col-xl-5  col-lg-6 py-1">
      						<ul class="header-left mb-0 float-right list-unstyled  d-flex align-items-center">
      	<li class='media d-none  hotline '>

      							<img class="align-self-center mr-3 " loading="lazy" src="//theme.hstatic.net/200000295082/1000772075/14/phone.png?v=586" width="28" alt="phone"/>

      							<div class="media-body d-md-flex flex-column d-none ">
      								<span>Hỗ trợ khách hàng</span>
      								<a class="font-weight-bold d-block" href="tel:0999999999" title="0999999999 ">
      									0999999999
      								</a>
      							</div>

      			</li>

      		<li class='media '>


      							<link href='//theme.hstatic.net/200000295082/1000772075/14/inventory-locations.css?v=586' rel='stylesheet' type='text/css'  media='all'  />
      <div class="inv_location position-relative">
      	<div class="inv_location_header mr-2">
      		<span>
      			Giao hoặc đến lấy tại  <i class="fas fa-chevron-down"></i>
      		</span>
      		<span class="inv_location_selected   d-block  text-truncate">150/8 Nguyễn Duy Cung, Phường 12, Phường 12, Quận Gò Vấp, Hồ Chí Minh, Vietnam
      </span>
      	</div>
      	<div class="inv_location_dropdown">
      		<div class="inv_location_title">
      			KHU VỰC MUA HÀNG
      		</div>
      		<div class="inv_location_body">
      			<div class="inv_location_filter">
      				<div class="filter-item">
      					<label>
      						Tỉnh / Thành
      					</label>
      					<select class="form-control filter-select filter-province">
      						<option value="null">- Chọn Tỉnh/Thành -</option>
      					</select>
      				</div>
      				<div class="filter-item">
      					<label>
      						Quận / Huyện
      					</label>
      					<select class="form-control  filter-select filter-district">
      						<option value="null">- Chọn Quận/Huyện -</option>
      					</select>
      				</div>

      			</div>
      			<div class="inv_location_current">
      				<span class="">
      					Giao hoặc đến lấy tại
      				</span>
      				<span class="inv_location_selected d-block ">
      					150/8 Nguyễn Duy Cung, Phường 12, Phường 12, Quận Gò Vấp, Hồ Chí Minh, Vietnam

      				</span>
      			</div>
      			<div class="inv_location_desc">
      				Chọn cửa hàng gần bạn nhất để tối ưu chi phí giao hàng. Hoặc đến lấy hàng
      			</div>
      			<ul class="inv_location_list list-unstyled">


      	<li 		class="inv_item" data-id="1045198" data-district="Quận Gò Vấp"
      			data-province="Hồ Chí Minh">
      		<i class="fas fa-map-marker-alt"></i>
      		<span class="address-name">Địa điểm mặc định</span><span style="display:none"> -</span>
      		150/8 Nguyễn Duy Cung, Phường 12, Phường 12, Quận Gò Vấp
      	</li>
      	<li 		class="inv_item" data-id="1180232" data-district="Quận Đống Đa"
      			data-province="Hà Nội">
      		<i class="fas fa-map-marker-alt"></i>
      		<span class="address-name">Láng Hạ</span><span style="display:none"> -</span>
      		2R75+85W, Láng Hạ, Đống Đa, Hà Nội, Phường Láng Hạ, Quận Đống Đa
      	</li>
      	<li 		class="inv_item" data-id="1180242" data-district="Quận Tân Bình"
      			data-province="Hồ Chí Minh">
      		<i class="fas fa-map-marker-alt"></i>
      		<span class="address-name">Tân Bình</span><span style="display:none"> -</span>
      		500 Tân Bình, Phường 13, Quận Tân Bình
      	</li>


      			</ul>
      		</div>
      	</div>
      </div>


      						</li>


      		<li class='ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none '>

      							<img class="align-self-center mr-2 " loading="lazy" src="//theme.hstatic.net/200000295082/1000772075/14/account.png?v=586" width="28" alt="phone"/>
      							<div class="media-body d-md-flex flex-column d-none ">
      																<a rel="nofollow" href="/account/login"  class="d-block text-nowrap" title="Đăng nhập" >
      									Đăng nhập
      								</a>
      								<small>
      									<a href="/account/register" title="Đăng ký" class="font-weight: light">
      										Đăng ký
      									</a> </small>

      							</div>
      						</li>
      						<li class="cartgroup  ml-0 mr-2 mr-md-0">
      							<div class="mini-cart text-xs-center">
      								<a class="img_hover_cart" href="/cart" title="Giỏ hàng">
      									<i class="fas fa-shopping-bag"></i>
      									<span class='mx-2 d-lg-block d-none text-nowrap'>Giỏ hàng</span>
      									<span class="count_item count_item_pr">0</span>
      								</a>
      								<div class="top-cart-content card ">
      									<ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
      										<li class="list-item">
      											<ul></ul>
      										</li>
      										<li class="action">

      										</li>
      									</ul>
      								</div>
      							</div>
      						</li>

      					</ul>
      				</div>
      			</div>
      		</div>
      	</div>

      </header>
    </script>


    
    <link rel="preload" as="script"
        href="{{ asset('theme.hstatic.net/200000295082/1000772075/14/inventory-locationsc353.js?v=586') }}" />

    <script src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/inventory-locationsc353.js?v=586') }}"
        type="text/javascript"></script>

    <h1 class="d-none">-</h1>


    @include('frontend.home.banner')

    @include('frontend.home.category')


    @include('frontend.home.happy_tet')

    
    @include('frontend.home.products_vietnam')

    {{-- <section class="section awe-section-4">
        <section class="section_product_new section">
            <div class="container py-2 card border-0">
                <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                    <h2 class="heading-bar__title">
                        <a class="link" href="collections/rau-cu-qua.html" title="NÔNG SẢN VIỆT">NÔNG SẢN VIỆT</a>
                    </h2>
                </div>

                <div class="slick-new mt-3 row" data-section="product-new-section">
                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063924"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/bong-cai-xanh-500g.html" title="Bông cải xanh - 500g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Bông cải xanh - 500g" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_1e0c79ba1867435d8ff3050096ba1b85_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/bong-cai-xanh-500g">
                                            <a title="Xem nhanh" href="products/bong-cai-xanh-500g.html"
                                                data-handle="bong-cai-xanh-500g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/bong-cai-xanh-500g.html" title="Bông cải xanh - 500g">Bông cải
                                            xanh - 500g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">35,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom soldout" data-variant-id="1068141211">
                                        <div class="product-cta" data-url="/products/bong-cai-xanh-500g">
                                            <input type="hidden" name="id" value="1068141211" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng" disabled>
                                                HẾT HÀNG
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" max="0" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063931"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                        title="Cà cherry đỏ (bán theo hộp 250gr)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Cà cherry đỏ (bán theo hộp 250gr)" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_e160294bd2934442aa032642d0878c60_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/ca-cherry-do-ban-theo-hop-250gr">
                                            <a title="Xem nhanh" href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                                data-handle="ca-cherry-do-ban-theo-hop-250gr"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                            title="Cà cherry đỏ (bán theo hộp 250gr)">Cà cherry đỏ (bán theo hộp 250gr)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">20,000₫</span>

                                        <span class="compare-price">26,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141218">
                                        <div class="product-cta" data-url="/products/ca-cherry-do-ban-theo-hop-250gr">
                                            <input type="hidden" name="id" value="1068141218" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063928"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/can-tay-huu-co-450g.html" title="Cần tây hữu cơ - 450g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Cần tây hữu cơ - 450g" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_ef249a2a156c4e539f49da902d686169_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/can-tay-huu-co-450g">
                                            <a title="Xem nhanh" href="products/can-tay-huu-co-450g.html"
                                                data-handle="can-tay-huu-co-450g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/can-tay-huu-co-450g.html" title="Cần tây hữu cơ - 450g">Cần tây
                                            hữu cơ - 450g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">35,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141215">
                                        <div class="product-cta" data-url="/products/can-tay-huu-co-450g">
                                            <input type="hidden" name="id" value="1068141215" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063926"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/hanh-tay-500gr-goi.html" title="Hành tây (500gr/gói)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Hành tây (500gr/gói)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_a141b402d6514dd49a8bf03f2a220ab3_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_6097522e0d384811b6dda0bc1efd5afd_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 16%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/hanh-tay-500gr-goi">
                                            <a title="Xem nhanh" href="products/hanh-tay-500gr-goi.html"
                                                data-handle="hanh-tay-500gr-goi"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/hanh-tay-500gr-goi.html" title="Hành tây (500gr/gói)">Hành tây
                                            (500gr/gói)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">25,000₫</span>

                                        <span class="compare-price">29,900₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141213">
                                        <div class="product-cta" data-url="/products/hanh-tay-500gr-goi">
                                            <input type="hidden" name="id" value="1068141213" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063929"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/hanh-tay-tim-500g.html" title="Hành Tây Tím 500g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Hành Tây Tím 500g" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_f943c1ed8904450485e2cc8d990eef5c_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_bc7a12f393c54472baed782106431834_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 18%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/hanh-tay-tim-500g">
                                            <a title="Xem nhanh" href="products/hanh-tay-tim-500g.html"
                                                data-handle="hanh-tay-tim-500g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/hanh-tay-tim-500g.html" title="Hành Tây Tím 500g">Hành Tây Tím
                                            500g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">33,000₫</span>

                                        <span class="compare-price">40,250₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141216">
                                        <div class="product-cta" data-url="/products/hanh-tay-tim-500g">
                                            <input type="hidden" name="id" value="1068141216" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063927"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/khoai-tay-bi-500gr-goi.html" title="Khoai Tây Bi (500gr/gói)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Khoai Tây Bi (500gr/gói)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_f88089450e464aa1938e91743ac218c8_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_a7e8e15830bf4bb5b15083f3254067a1_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/khoai-tay-bi-500gr-goi">
                                            <a title="Xem nhanh" href="products/khoai-tay-bi-500gr-goi.html"
                                                data-handle="khoai-tay-bi-500gr-goi"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/khoai-tay-bi-500gr-goi.html"
                                            title="Khoai Tây Bi (500gr/gói)">Khoai Tây Bi (500gr/gói)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">20,000₫</span>

                                        <span class="compare-price">26,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141214">
                                        <div class="product-cta" data-url="/products/khoai-tay-bi-500gr-goi">
                                            <input type="hidden" name="id" value="1068141214" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063930"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/khoai-tay-hong-500gr-khay.html"
                                        title="Khoai Tây Hồng (500gr/khay)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Khoai Tây Hồng (500gr/khay)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_7ba9a4b85f66435cb5657c13ab19d98a_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_9a47b9ccdd924a7db51a2a2ac6dd4b27_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/khoai-tay-hong-500gr-khay">
                                            <a title="Xem nhanh" href="products/khoai-tay-hong-500gr-khay.html"
                                                data-handle="khoai-tay-hong-500gr-khay"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/khoai-tay-hong-500gr-khay.html"
                                            title="Khoai Tây Hồng (500gr/khay)">Khoai Tây Hồng (500gr/khay)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">26,000₫</span>

                                        <span class="compare-price">33,800₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141217">
                                        <div class="product-cta" data-url="/products/khoai-tay-hong-500gr-khay">
                                            <input type="hidden" name="id" value="1068141217" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 col-6">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063925"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/su-hao-huu-co.html" title="Su Hào Hữu Cơ">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Su Hào Hữu Cơ" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_9b646adf5deb4878bed94c8e8235ece1_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_b00b3b5236ba4043b434e57bf3ac2317_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 7%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/su-hao-huu-co">
                                            <a title="Xem nhanh" href="products/su-hao-huu-co.html"
                                                data-handle="su-hao-huu-co"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/su-hao-huu-co.html" title="Su Hào Hữu Cơ">Su Hào Hữu Cơ</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">26,000₫</span>

                                        <span class="compare-price">27,950₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom">
                                        <div class="product-cta" data-url="/products/su-hao-huu-co">
                                            <input class="hidden" type="hidden" name="variantId"
                                                value="1068141212" />
                                            <button class="btn btn-cart btn-left btn left-to btn-main" title="Tùy chọn"
                                                type="button"
                                                onclick="window.location.href='products/su-hao-huu-co.html'">
                                                TÙY CHỌN
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center my-3">
                    <a href="collections/rau-cu-qua.html" title="Xem tất cả" class="btn btn-main rounded-pill px-4">
                        Xem tất cả <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </section> --}}

    <section class="section awe-section-5">
        <div class="section_banner_adv">
            <div class="container">
                <div class="text-center row mb-3">
                    <a class="col-12 px-md-0" href="collections/all.html" title="Hot product">
                        <img class="img-fluid lazyload"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                            data-src="//theme.hstatic.net/200000295082/1000772075/14/section_hot_banner.png?v=586"
                            alt="Hot product" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section awe-section-6">
        <section class="section_product_banner section">
            <div class="container py-2 card border-0">
                <div class="row">
                    <div class="col-12">
                        <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                            <h2 class="heading-bar__title">
                                <a class="link" href="collections/trai-cay-viet-nam.html" title="TRÁI CÂY">TRÁI
                                    CÂY</a>
                            </h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-4 banner_col d-flex align-items-center mb-3 right">
                                <a href="collections/trai-cay-viet-nam.html" title="TRÁI CÂY">
                                    <img class="lazyload img-fluid"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdEAAAEuCAIAAABeZb8AAAALp2lDQ1BEaXNwbGF5AABIx61Xd1TTyRaeX0klCSWhSgnSQTCAdCmhF5EOgo2QBBIIIYaAgB0VV3AtiIhgWZFVEAXXAshasWBhVbDXByoqyrqoiw2VNwEs+855f7xz3uTMb775zp3vzp2ZzLkDAP0xTyaToGoAZEoV8uggX/a0xCQ26TGgAD0AgAfg8PjZMm5k5BTYA1/bHwoCwNsbyi8AV22VWuB/K+oCYTYfykRCnCLI5mdCfBAAtJUvkysAwGWQN5mrkClxGcQsOZwgxLVKnDaKjyhxyii+MmITG+0H8WMAyDQeT54GAG0A8uxcfhrUocNoAUcqEEsh9oHYiy/iCSBeDPEEaAN90vdA7Jryg07aPzRTvmnyeGnf8GgsI4XsL86WSXj54P9dMiU5X30YwkqT50THwZYB1y0vOyMmbAwX8XkBMRDDWJEykTBEuW84xDUyhW/0mE1tqjwwbsymSZQT/FXnrFgREjuGr2VkhSntqRA/5Gf7JX0dK02ZGqH0D3F/TkYcd4x/LxD6B3y1kWdFj9mgxAJRbALERIg1snNjlDYaEOsUiPymjvHW6bzQyDF7jlASNOYXnSxTREZ88yuZqoxFC/KBwuzvMSpEscGjGJ2hgAdgbKwkVRwYMqaZK5IHR4/hQplk5CyPaPLkAUHKcwP51UJpXMwoj1YLeP5hYzr7cH3cC/fEXXFf2PoAfyAG2UAGJEAI0kEk4AEpUMCvBP54hCeELhAOsiAnhmwWkP/QE4Ic2A+DOB1iCShAokAM4AMR7MlBJsg6xGqruU5rIbcrIJ8xYgV5nAV9c3Fv3AN3wt0AF6QCMaoLPaZXZOW7x4uAL1SUAAGcVQZ4rByR6qXkOe2cHZzDnJucfk4Ntg1rwTqwo1gztBaOeFfaf/PNIDNsGVyGNYPFIDH0GWYgAGrJR2KbCjXz4ewV4C1Igkw2HAsjIk4iWsBqBdiw9Se6Ee2Jzj+sDQ+OUcbwZCQyoBDmKZQH1y9Lli8Xp4kUbC68MYTsECnfbgLbgePAAUB5/4we7zdRI/cKotXxnVPA/fD8EwDsyncuKRuAPVBX2/E7Z6kDgOZWAFqs+Tny3FEOV34IcDdV4U7rwn+PCbAEtsABOMN7zgfGGgoiQCxIBLNGViQTznkumA+WgCJQAtaCDaASbAM7QC3YC/aDZnAEnARnwUVwBVwHd0E36AUvwABcnSEEQUgIHWEiuogRYobYIA6IK+KFBCBTkGgkEUlG0hApkoPMR5YiJUgpUolsR+qQ35DDyEnkPNKJ3EZ6kD7kNfIRxVAaykINUHN0IuqKctEwNBadiaahc9ACdBm6Gq1Aq9E9aBN6Er2IXke70RfoIAYwFUwLM8ZsMVfMD4vAkrBUTI4txIqxcqwaa8BasXbsKtaN9WMfcCLOxNm4LTxRwXgczsfn4AvxVXglXos34afxq3gPPoB/IdAJ+gQbgjshhDCNkEaYSygilBN2Eg4RzhCuE3oJb4lEohbcexdiMDGRmE6cR1xF3EJsJJ4gdhIfEQdJJJIuyYbkSYog8UgKUhFpE2kP6Tipi9RLek9WIRuRHciB5CSylFxILifvJh8jd5GfkocoahQzijslgiKg5FPWUGoorZTLlF7KEFWdakH1pMZS06lLqBXUBuoZ6j3qGxUVlfEqbipRKmKVxSoVKvtUzqn0qHygadCsaX60GbQc2mraLtoJ2m3aGzqdbk73oSfRFfTV9Dr6KfoD+nsGk2HHCGEIGIsYVYwmRhfjpSpF1UyVqzpLtUC1XPWA6mXVfjWKmrmanxpPbaFaldphtZtqg+pMdXv1CPVM9VXqu9XPqz/TIGmYawRoCDSWaezQOKXxiIkxTZh+TD5zKbOGeYbZyyKyLFghrHRWCWsv6xJrQFNDc5JmvGaeZpXmUc1uLUzLXCtES6K1Rmu/1g2tj9oG2lxtofZK7QbtLu13OuN0fHSEOsU6jTrXdT7qsnUDdDN01+k2697Xw/Ws9aL05upt1Tuj1z+ONc5jHH9c8bj94+7oo/rW+tH68/R36HfoDxoYGgQZyAw2GZwy6DfUMvQxTDcsMzxm2GfENPIyEhuVGR03es7WZHPZEnYF+zR7wFjfONg4x3i78SXjofEW4+PGF45vHH/fhGriapJqUmbSZjJgamQabjrftN70jhnFzNVMZLbRrN3snbmFeYL5CvNm82cWOhYhFgUW9Rb3LOmW3pZzLKstr1kRrVytMqy2WF2xRq2drEXWVdaXbVAbZxuxzRabzgmECW4TpBOqJ9y0pdlybXNt62177LTsptgV2jXbvZxoOjFp4rqJ7RO/cJw4Ek4N5669hn2ofaF9q/1rB2sHvkOVwzVHumOg4yLHFsdXk2wmCSdtnXTLiekU7rTCqc3ps7OLs9y5wbnPxdQl2WWzy01Xlmuk6yrXc24EN1+3RW5H3D64O7sr3Pe7/+Vh65Hhsdvj2WSLycLJNZMfeY735Hlu9+z2Ynsle/3i1e1t7M3zrvZ+6GPiI/DZ6fOUa8VN5+7hvvTl+Mp9D/m+83P3W+B3wh/zD/Iv9r8UoBEQF1AZ8CBwfGBaYH3gQJBT0LygE8GE4LDgdcE3QwxC+CF1IQOhLqELQk+H0cJiwirDHk6xniKf0hqOhoeGrw+/N9VsqnRqcwSICIlYH3E/0iJyTuTvUcSoyKiqqCfR9tHzo9tjmDGzY3bHvI31jV0TezfOMi4nri1eNX5GfF38uwT/hNKE7mkTpy2YdjFRL1Gc2JJESopP2pk0OD1g+obpvTOcZhTNuDHTYmbezPOz9GZJZh2drTqbN/tAMiE5IXl38ideBK+aN5gSkrI5ZYDvx9/IfyHwEZQJ+oSewlLh01TP1NLUZ2meaevT+kTeonJRv9hPXCl+lR6cvi39XUZExq6MYUmCpDGTnJmceViqIc2Qns4yzMrL6pTZyIpk3XPc52yYMyAPk+/MRrJnZrcoWDDR68ixzFme05PrlVuV+35u/NwDeep50ryOfOv8lflPCwILfp2Hz+PPa5tvPH/J/J4F3AXbFyILUxa2LTJZtGxR7+KgxbVLqEsylvxRyCksLfx7acLS1mUGyxYve7Q8aHl9EaNIXnRzhceKbT/hP4l/urTSceWmlV+KBcUXSjgl5SWfVvFXXfjZ/ueKn4dXp66+tMZ5zda1xLXStTfWea+rLVUvLSh9tD58fVMZu6y47O8NszecL59Uvm0jdWPOxu6KKRUtm0w3rd30qVJUeb3Kt6pxs/7mlZvfbRFs6drqs7Vhm8G2km0ffxH/cmt70PamavPq8h3EHbk7ntTE17T/6vpr3U69nSU7P++S7uquja49XedSV7dbf/eaerQ+p75vz4w9V/b6721psG3Y3qjVWLIP7MvZ9/y35N9u7A/b33bA9UDDQbODmw8xDxU3IU35TQPNoubulsSWzsOhh9taPVoP/W73+64jxkeqjmoeXXOMemzZseHjBccHT8hO9J9MO/mobXbb3VPTTl07HXX60pmwM+fOBp491c5tP37O89yR8+7nD19wvdB80fliU4dTx6E/nP44dMn5UtNll8stV9yutHZO7jzW5d118qr/1bPXQq5dvD71eueNuBu3bs642X1LcOvZbcntV3dy7wzdXXyPcK/4vtr98gf6D6r/ZfWvxm7n7qM9/j0dD2Me3n3Ef/TicfbjT73LntCflD81elr3zOHZkb7AvivPpz/vfSF7MdRf9Kf6n5tfWr48+JfPXx0D0wZ6X8lfDb9e9Ub3za6/J/3dNhg5+OBt5tuhd8Xvdd/XfnD90P4x4ePTobmfSJ8qPlt9bv0S9uXecObwsIwn542kAhisaGoqAK93wVw/EQAmfDdQp4++D8beNcj3F85/w6NviJHiDMB2mH8mwFwxbDkAlT0AWDRA3SYAIukAxLoB1NHxWx0r2amODqNaNF+YmjwYHn5jDgBpPQCf1w4PD1UPD3/eASd7D4AT0tF3yQ9z/88WKJVHtP/R/hs32D7TdHKCkwAAAAlwSFlzAAALEwAACxMBAJqcGAAABfZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKE1hY2ludG9zaCkiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0xMS0xOVQxNTozNDoyOCswNzowMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1Y2ZjMGVkNC0yNDMwLTQ0OGEtYjQyNS05MTRlMjQ3YmIyZWMiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDpiY2YxODIyOC02Y2RmLWY3NDQtYWYwOS1hMThjMDMyZmMyYzYiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2ZmVlYjRlMC1jNWQzLTQ4NDgtODliNi0wNzcxNTdiMmM4MmQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iRGlzcGxheSI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NmZlZWI0ZTAtYzVkMy00ODQ4LTg5YjYtMDc3MTU3YjJjODJkIiBzdEV2dDp3aGVuPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NWNmYzBlZDQtMjQzMC00NDhhLWI0MjUtOTE0ZTI0N2JiMmVjIiBzdEV2dDp3aGVuPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4Jpsr8AAADCUlEQVR42u3UMQ0AAAgDMDL/TjGBCJJdrYhmAWjJANDiXADnAjgXAOcCOBcA5wI4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwGcC4BzAZwLgHMBnAvgXACcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBnAuAcwGcC4BzAZwLgHMBnAvgXACcC+BcAJwL4FwA5wLgXADnAuBcAOcCOBcA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAzgXAuQDOBcC5AM4FcC4AzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBnAuAcwGcC4BzAZwL4FwAnAvgXACcC+BcAJwL4FwA5wLgXADnAuBcAOcCOBcA5wI4FwDnAjgXwLkAOBfAuQA4F8C5AM4FwLkAzgXAuQDOBcC5AM4FcC4AzgVwLgDOBXAugHMBcC6AcwFwLoBzAZwLgHMBnAuAcwGcC4BzAZwL4FwAnAvgXACcC+BcAOcC4FwA5wLgXADnAjgXAOcCOBcA5wI4FwDnAjgXwLkAOBfAuQA4F8C5AM4FwLkAzgXAuQDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwFwLoBzAZwLgHMBnAuAcwGcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wLgXADnAjgXAOcCOBcA5wI4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgXAuQDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwGcC4BzAZwLgHMBnAuAcwGcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBcC6AcwGcC8DfAU+vAzkpG01TAAAAAElFTkSuQmCC"
                                        data-src="//theme.hstatic.net/200000295082/1000772075/14/section_pro_banner.jpg?v=586"
                                        alt="TRÁI CÂY" />
                                </a>
                            </div>
                            <div class="col-12 col-md-8" data-section="product-banner-section">
                                <div class="slick-pro-banner mt-3 mt-md-0">
                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063934"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/chuoi-unifarm-kid-1kg.html"
                                                        title="Chuối Unifarm Kid 1kg">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png?v=586') }}"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Chuối Unifarm Kid 1kg" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_f5795496a3184a48a844bc656ecd184f_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="label_product">
                                                        <div class="label_wrapper">- 5%</div>
                                                    </div>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/products/chuoi-unifarm-kid-1kg">
                                                            <a title="Xem nhanh"
                                                                href="products/chuoi-unifarm-kid-1kg.html"
                                                                data-handle="chuoi-unifarm-kid-1kg"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/chuoi-unifarm-kid-1kg.html"
                                                            title="Chuối Unifarm Kid 1kg">Chuối Unifarm Kid 1kg</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">25,500₫</span>

                                                        <span class="compare-price">26,800₫</span>
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
                                                            data-url="/products/chuoi-unifarm-kid-1kg">
                                                            <input type="hidden" name="id" value="1068141221" />
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

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063973"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/dua-gang-trai-tron.html"
                                                        title="Dưa gang trái tròn">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Dưa gang trái tròn" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_b36b1d0bd0e04566b74669fd602b466c_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="label_product">
                                                        <div class="label_wrapper">- 22%</div>
                                                    </div>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/products/dua-gang-trai-tron">
                                                            <a title="Xem nhanh" href="products/dua-gang-trai-tron.html"
                                                                data-handle="dua-gang-trai-tron"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/dua-gang-trai-tron.html"
                                                            title="Dưa gang trái tròn">Dưa gang trái tròn</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">15,500₫</span>

                                                        <span class="compare-price">19,800₫</span>
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

                                                    <div class="product-action-bottom" data-variant-id="1068141272">
                                                        <div class="product-cta"
                                                            data-url="/products/dua-gang-trai-tron">
                                                            <input type="hidden" name="id" value="1068141272" />
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

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063933"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/me-ngot-thai-hop-500g.html"
                                                        title="Me Ngọt Thái Hộp 500g">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Me Ngọt Thái Hộp 500g" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_dde1a5bcfafe47179d0b2c9f070c030c_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/products/me-ngot-thai-hop-500g">
                                                            <a title="Xem nhanh"
                                                                href="products/me-ngot-thai-hop-500g.html"
                                                                data-handle="me-ngot-thai-hop-500g"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/me-ngot-thai-hop-500g.html"
                                                            title="Me Ngọt Thái Hộp 500g">Me Ngọt Thái Hộp 500g</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">72,900₫</span>
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

                                                    <div class="product-action-bottom" data-variant-id="1068141220">
                                                        <div class="product-cta"
                                                            data-url="/products/me-ngot-thai-hop-500g">
                                                            <input type="hidden" name="id" value="1068141220" />
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

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063932"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/tao-envy-size-70-1kg.html"
                                                        title="Táo Envy Size 70 1Kg">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Táo Envy Size 70 1Kg" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_db47a9b50fc0433b881fbd7460e2d5ce_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="label_product">
                                                        <div class="label_wrapper">- 15%</div>
                                                    </div>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/products/tao-envy-size-70-1kg">
                                                            <a title="Xem nhanh"
                                                                href="products/tao-envy-size-70-1kg.html"
                                                                data-handle="tao-envy-size-70-1kg"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/tao-envy-size-70-1kg.html"
                                                            title="Táo Envy Size 70 1Kg">Táo Envy Size 70 1Kg</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">159,000₫</span>

                                                        <span class="compare-price">188,000₫</span>
                                                    </div>

                                                    <div class="fundiin">
                                                        hoặc
                                                        <span style="color: black; font-weight: bold">53,000₫</span>
                                                        x3 kỳ với
                                                        <span
                                                            style="
                                  color: #24c3fd;
                                  font-size: 14px;
                                  font-weight: bold;
                                ">
                                                            Fundiin </span><a
                                                            style="
                                  font-size: 13px;
                                  text-decoration: underline;
                                "
                                                            href="https://fundiin.vn/ecompopup/" target="_blank">
                                                            Tìm hiểu (?)
                                                        </a>
                                                    </div>

                                                    <div class="product-action-bottom" data-variant-id="1068141219">
                                                        <div class="product-cta"
                                                            data-url="/products/tao-envy-size-70-1kg">
                                                            <input type="hidden" name="id" value="1068141219" />
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

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063935"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/tao-xanh-nhap-khau-500g.html"
                                                        title="Táo Xanh Nhập Khẩu 500G">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Táo Xanh Nhập Khẩu 500G" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_2b1dc783a47149fd913fd2907c02adb4_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="label_product">
                                                        <div class="label_wrapper">- 27%</div>
                                                    </div>

                                                    <div class="product-action">
                                                        <div class="group_action"
                                                            data-url="/products/tao-xanh-nhap-khau-500g">
                                                            <a title="Xem nhanh"
                                                                href="products/tao-xanh-nhap-khau-500g.html"
                                                                data-handle="tao-xanh-nhap-khau-500g"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/tao-xanh-nhap-khau-500g.html"
                                                            title="Táo Xanh Nhập Khẩu 500G">Táo Xanh Nhập Khẩu 500G</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">44,950₫</span>

                                                        <span class="compare-price">61,750₫</span>
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

                                                    <div class="product-action-bottom soldout">
                                                        <div class="product-cta"
                                                            data-url="/products/tao-xanh-nhap-khau-500g">
                                                            <input class="hidden" type="hidden" name="variantId"
                                                                value="1068141222" />
                                                            <button class="btn btn-cart btn-left btn left-to btn-main"
                                                                title="Tùy chọn" type="button"
                                                                onclick="window.location.href='products/tao-xanh-nhap-khau-500g.html'">
                                                                TÙY CHỌN
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063976"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/thanh-long.html" title="Thanh long">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Thanh long" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_21bb72f0a4ae465a9cb94053de39abb8_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="product-action">
                                                        <div class="group_action" data-url="/products/thanh-long">
                                                            <a title="Xem nhanh" href="products/thanh-long.html"
                                                                data-handle="thanh-long"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/thanh-long.html" title="Thanh long">Thanh
                                                            long</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">12,000₫</span>
                                                    </div>

                                                    <div class="fundiin fundiin-alert">
                                                        Hoặc trả qua 3 kỳ với
                                                        <span
                                                            style="
                                  color: #24c3fd;
                                  font-size: 14px;
                                  font-weight: bold;
                                ">Fundiin</span>
                                                        <a style="font-size: 13px; text-decoration: underline;"
                                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                                            Tìm hiểu (?)</a>
                                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ
                                                            100,000₫, chỉ trả
                                                            trước từ 33,000₫)</span>
                                                    </div>

                                                    <div class="product-action-bottom soldout"
                                                        data-variant-id="1068141278">
                                                        <div class="product-cta" data-url="/products/thanh-long">
                                                            <input type="hidden" name="id" value="1068141278" />
                                                            <button
                                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                                title="Thêm vào giỏ hàng" disabled>
                                                                HẾT HÀNG
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
                                                                    maxlength="3" class="form-control prd_quantity qty"
                                                                    max="0" />
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

                                    <div class="col-5 col-md-12">
                                        <div class="item_product_main">
                                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1031063978"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">
                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                        href="products/xoai-keo.html" title="Xoài keo">
                                                        <img class="product-frame lazyload"
                                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                                            alt="Xoài keo" data-image-scale="1" />

                                                        <img loading="lazy" class="" width="480"
                                                            height="480"
                                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_87f84d4c5283400f8dcca19266c09d80_medium.jpg') }}"
                                                            alt="" />
                                                    </a>

                                                    <div class="product-action">
                                                        <div class="group_action" data-url="/products/xoai-keo">
                                                            <a title="Xem nhanh" href="products/xoai-keo.html"
                                                                data-handle="xoai-keo"
                                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="products/xoai-keo.html" title="Xoài keo">Xoài keo</a>
                                                    </h3>

                                                    <div class="price-box">
                                                        <span class="price">23,800₫</span>
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

                                                    <div class="product-action-bottom soldout">
                                                        <div class="product-cta" data-url="/products/xoai-keo">
                                                            <input class="hidden" type="hidden" name="variantId"
                                                                value="1068141280" />
                                                            <button class="btn btn-cart btn-left btn left-to btn-main"
                                                                title="Tùy chọn" type="button"
                                                                onclick="window.location.href='products/xoai-keo.html'">
                                                                TÙY CHỌN
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center my-3">
                        <a href="collections/trai-cay-viet-nam.html" title="Xem tất cả"
                            class="btn btn-main rounded-pill px-4">
                            Xem tất cả <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="section awe-section-7">
        <section class="section_product_new section">
            <div class="container py-2 card border-0">
                <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                    <h2 class="heading-bar__title">
                        <a class="link" href="collections/rau-cu-qua.html" title="RAU CỦ QUẢ">RAU CỦ QUẢ</a>
                    </h2>
                </div>

                <div class="row mt-3" data-section="hot-section">
                    <div class="col-12 col-md-30 text-center pb-2">
                        <a href="#" title="RAU CỦ QUẢ">
                            <img class="lazyload img-fluid"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdEAAAEuCAIAAABeZb8AAAALp2lDQ1BEaXNwbGF5AABIx61Xd1TTyRaeX0klCSWhSgnSQTCAdCmhF5EOgo2QBBIIIYaAgB0VV3AtiIhgWZFVEAXXAshasWBhVbDXByoqyrqoiw2VNwEs+855f7xz3uTMb775zp3vzp2ZzLkDAP0xTyaToGoAZEoV8uggX/a0xCQ26TGgAD0AgAfg8PjZMm5k5BTYA1/bHwoCwNsbyi8AV22VWuB/K+oCYTYfykRCnCLI5mdCfBAAtJUvkysAwGWQN5mrkClxGcQsOZwgxLVKnDaKjyhxyii+MmITG+0H8WMAyDQeT54GAG0A8uxcfhrUocNoAUcqEEsh9oHYiy/iCSBeDPEEaAN90vdA7Jryg07aPzRTvmnyeGnf8GgsI4XsL86WSXj54P9dMiU5X30YwkqT50THwZYB1y0vOyMmbAwX8XkBMRDDWJEykTBEuW84xDUyhW/0mE1tqjwwbsymSZQT/FXnrFgREjuGr2VkhSntqRA/5Gf7JX0dK02ZGqH0D3F/TkYcd4x/LxD6B3y1kWdFj9mgxAJRbALERIg1snNjlDYaEOsUiPymjvHW6bzQyDF7jlASNOYXnSxTREZ88yuZqoxFC/KBwuzvMSpEscGjGJ2hgAdgbKwkVRwYMqaZK5IHR4/hQplk5CyPaPLkAUHKcwP51UJpXMwoj1YLeP5hYzr7cH3cC/fEXXFf2PoAfyAG2UAGJEAI0kEk4AEpUMCvBP54hCeELhAOsiAnhmwWkP/QE4Ic2A+DOB1iCShAokAM4AMR7MlBJsg6xGqruU5rIbcrIJ8xYgV5nAV9c3Fv3AN3wt0AF6QCMaoLPaZXZOW7x4uAL1SUAAGcVQZ4rByR6qXkOe2cHZzDnJucfk4Ntg1rwTqwo1gztBaOeFfaf/PNIDNsGVyGNYPFIDH0GWYgAGrJR2KbCjXz4ewV4C1Igkw2HAsjIk4iWsBqBdiw9Se6Ee2Jzj+sDQ+OUcbwZCQyoBDmKZQH1y9Lli8Xp4kUbC68MYTsECnfbgLbgePAAUB5/4we7zdRI/cKotXxnVPA/fD8EwDsyncuKRuAPVBX2/E7Z6kDgOZWAFqs+Tny3FEOV34IcDdV4U7rwn+PCbAEtsABOMN7zgfGGgoiQCxIBLNGViQTznkumA+WgCJQAtaCDaASbAM7QC3YC/aDZnAEnARnwUVwBVwHd0E36AUvwABcnSEEQUgIHWEiuogRYobYIA6IK+KFBCBTkGgkEUlG0hApkoPMR5YiJUgpUolsR+qQ35DDyEnkPNKJ3EZ6kD7kNfIRxVAaykINUHN0IuqKctEwNBadiaahc9ACdBm6Gq1Aq9E9aBN6Er2IXke70RfoIAYwFUwLM8ZsMVfMD4vAkrBUTI4txIqxcqwaa8BasXbsKtaN9WMfcCLOxNm4LTxRwXgczsfn4AvxVXglXos34afxq3gPPoB/IdAJ+gQbgjshhDCNkEaYSygilBN2Eg4RzhCuE3oJb4lEohbcexdiMDGRmE6cR1xF3EJsJJ4gdhIfEQdJJJIuyYbkSYog8UgKUhFpE2kP6Tipi9RLek9WIRuRHciB5CSylFxILifvJh8jd5GfkocoahQzijslgiKg5FPWUGoorZTLlF7KEFWdakH1pMZS06lLqBXUBuoZ6j3qGxUVlfEqbipRKmKVxSoVKvtUzqn0qHygadCsaX60GbQc2mraLtoJ2m3aGzqdbk73oSfRFfTV9Dr6KfoD+nsGk2HHCGEIGIsYVYwmRhfjpSpF1UyVqzpLtUC1XPWA6mXVfjWKmrmanxpPbaFaldphtZtqg+pMdXv1CPVM9VXqu9XPqz/TIGmYawRoCDSWaezQOKXxiIkxTZh+TD5zKbOGeYbZyyKyLFghrHRWCWsv6xJrQFNDc5JmvGaeZpXmUc1uLUzLXCtES6K1Rmu/1g2tj9oG2lxtofZK7QbtLu13OuN0fHSEOsU6jTrXdT7qsnUDdDN01+k2697Xw/Ws9aL05upt1Tuj1z+ONc5jHH9c8bj94+7oo/rW+tH68/R36HfoDxoYGgQZyAw2GZwy6DfUMvQxTDcsMzxm2GfENPIyEhuVGR03es7WZHPZEnYF+zR7wFjfONg4x3i78SXjofEW4+PGF45vHH/fhGriapJqUmbSZjJgamQabjrftN70jhnFzNVMZLbRrN3snbmFeYL5CvNm82cWOhYhFgUW9Rb3LOmW3pZzLKstr1kRrVytMqy2WF2xRq2drEXWVdaXbVAbZxuxzRabzgmECW4TpBOqJ9y0pdlybXNt62177LTsptgV2jXbvZxoOjFp4rqJ7RO/cJw4Ek4N5669hn2ofaF9q/1rB2sHvkOVwzVHumOg4yLHFsdXk2wmCSdtnXTLiekU7rTCqc3ps7OLs9y5wbnPxdQl2WWzy01Xlmuk6yrXc24EN1+3RW5H3D64O7sr3Pe7/+Vh65Hhsdvj2WSLycLJNZMfeY735Hlu9+z2Ynsle/3i1e1t7M3zrvZ+6GPiI/DZ6fOUa8VN5+7hvvTl+Mp9D/m+83P3W+B3wh/zD/Iv9r8UoBEQF1AZ8CBwfGBaYH3gQJBT0LygE8GE4LDgdcE3QwxC+CF1IQOhLqELQk+H0cJiwirDHk6xniKf0hqOhoeGrw+/N9VsqnRqcwSICIlYH3E/0iJyTuTvUcSoyKiqqCfR9tHzo9tjmDGzY3bHvI31jV0TezfOMi4nri1eNX5GfF38uwT/hNKE7mkTpy2YdjFRL1Gc2JJESopP2pk0OD1g+obpvTOcZhTNuDHTYmbezPOz9GZJZh2drTqbN/tAMiE5IXl38ideBK+aN5gSkrI5ZYDvx9/IfyHwEZQJ+oSewlLh01TP1NLUZ2meaevT+kTeonJRv9hPXCl+lR6cvi39XUZExq6MYUmCpDGTnJmceViqIc2Qns4yzMrL6pTZyIpk3XPc52yYMyAPk+/MRrJnZrcoWDDR68ixzFme05PrlVuV+35u/NwDeep50ryOfOv8lflPCwILfp2Hz+PPa5tvPH/J/J4F3AXbFyILUxa2LTJZtGxR7+KgxbVLqEsylvxRyCksLfx7acLS1mUGyxYve7Q8aHl9EaNIXnRzhceKbT/hP4l/urTSceWmlV+KBcUXSjgl5SWfVvFXXfjZ/ueKn4dXp66+tMZ5zda1xLXStTfWea+rLVUvLSh9tD58fVMZu6y47O8NszecL59Uvm0jdWPOxu6KKRUtm0w3rd30qVJUeb3Kt6pxs/7mlZvfbRFs6drqs7Vhm8G2km0ffxH/cmt70PamavPq8h3EHbk7ntTE17T/6vpr3U69nSU7P++S7uquja49XedSV7dbf/eaerQ+p75vz4w9V/b6721psG3Y3qjVWLIP7MvZ9/y35N9u7A/b33bA9UDDQbODmw8xDxU3IU35TQPNoubulsSWzsOhh9taPVoP/W73+64jxkeqjmoeXXOMemzZseHjBccHT8hO9J9MO/mobXbb3VPTTl07HXX60pmwM+fOBp491c5tP37O89yR8+7nD19wvdB80fliU4dTx6E/nP44dMn5UtNll8stV9yutHZO7jzW5d118qr/1bPXQq5dvD71eueNuBu3bs642X1LcOvZbcntV3dy7wzdXXyPcK/4vtr98gf6D6r/ZfWvxm7n7qM9/j0dD2Me3n3Ef/TicfbjT73LntCflD81elr3zOHZkb7AvivPpz/vfSF7MdRf9Kf6n5tfWr48+JfPXx0D0wZ6X8lfDb9e9Ub3za6/J/3dNhg5+OBt5tuhd8Xvdd/XfnD90P4x4ePTobmfSJ8qPlt9bv0S9uXecObwsIwn542kAhisaGoqAK93wVw/EQAmfDdQp4++D8beNcj3F85/w6NviJHiDMB2mH8mwFwxbDkAlT0AWDRA3SYAIukAxLoB1NHxWx0r2amODqNaNF+YmjwYHn5jDgBpPQCf1w4PD1UPD3/eASd7D4AT0tF3yQ9z/88WKJVHtP/R/hs32D7TdHKCkwAAAAlwSFlzAAALEwAACxMBAJqcGAAABfZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKE1hY2ludG9zaCkiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0xMS0xOVQxNTozNDoyOCswNzowMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1Y2ZjMGVkNC0yNDMwLTQ0OGEtYjQyNS05MTRlMjQ3YmIyZWMiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDpiY2YxODIyOC02Y2RmLWY3NDQtYWYwOS1hMThjMDMyZmMyYzYiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2ZmVlYjRlMC1jNWQzLTQ4NDgtODliNi0wNzcxNTdiMmM4MmQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iRGlzcGxheSI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NmZlZWI0ZTAtYzVkMy00ODQ4LTg5YjYtMDc3MTU3YjJjODJkIiBzdEV2dDp3aGVuPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NWNmYzBlZDQtMjQzMC00NDhhLWI0MjUtOTE0ZTI0N2JiMmVjIiBzdEV2dDp3aGVuPSIyMDIwLTExLTE5VDE1OjM0OjI4KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4Jpsr8AAADCUlEQVR42u3UMQ0AAAgDMDL/TjGBCJJdrYhmAWjJANDiXADnAjgXAOcCOBcA5wI4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwGcC4BzAZwLgHMBnAvgXACcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBnAuAcwGcC4BzAZwLgHMBnAvgXACcC+BcAJwL4FwA5wLgXADnAuBcAOcCOBcA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAzgXAuQDOBcC5AM4FcC4AzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBnAuAcwGcC4BzAZwL4FwAnAvgXACcC+BcAJwL4FwA5wLgXADnAuBcAOcCOBcA5wI4FwDnAjgXwLkAOBfAuQA4F8C5AM4FwLkAzgXAuQDOBcC5AM4FcC4AzgVwLgDOBXAugHMBcC6AcwFwLoBzAZwLgHMBnAuAcwGcC4BzAZwL4FwAnAvgXACcC+BcAOcC4FwA5wLgXADnAjgXAOcCOBcA5wI4FwDnAjgXwLkAOBfAuQA4F8C5AM4FwLkAzgXAuQDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwFwLoBzAZwLgHMBnAuAcwGcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wLgXADnAjgXAOcCOBcA5wI4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgXAuQDOBXAuAM4FcC4AzgVwLoBzAXAugHMBcC6AcwGcC4BzAZwLgHMBnAuAcwGcC+BcAJwL4FwAnAvgXADnAuBcAOcC4FwA5wI4FwDnAjgXAOcCOBfAuQA4F8C5ADgXwLkAOBfAuQDOBcC5AM4FwLkAzgVwLgDOBXAuAM4FcC6AcwFwLoBzAXAugHMBcC6AcwGcC8DfAU+vAzkpG01TAAAAAElFTkSuQmCC"
                                data-src="//theme.hstatic.net/200000295082/1000772075/14/section_hot.jpg?v=586"
                                alt="RAU CỦ QUẢ" />
                        </a>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063924"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/bong-cai-xanh-500g.html" title="Bông cải xanh - 500g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Bông cải xanh - 500g" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_1e0c79ba1867435d8ff3050096ba1b85_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/bong-cai-xanh-500g">
                                            <a title="Xem nhanh" href="products/bong-cai-xanh-500g.html"
                                                data-handle="bong-cai-xanh-500g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/bong-cai-xanh-500g.html" title="Bông cải xanh - 500g">Bông cải
                                            xanh - 500g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">35,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom soldout" data-variant-id="1068141211">
                                        <div class="product-cta" data-url="/products/bong-cai-xanh-500g">
                                            <input type="hidden" name="id" value="1068141211" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng" disabled>
                                                HẾT HÀNG
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" max="0" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063931"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                        title="Cà cherry đỏ (bán theo hộp 250gr)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Cà cherry đỏ (bán theo hộp 250gr)" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_e160294bd2934442aa032642d0878c60_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/ca-cherry-do-ban-theo-hop-250gr">
                                            <a title="Xem nhanh" href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                                data-handle="ca-cherry-do-ban-theo-hop-250gr"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/ca-cherry-do-ban-theo-hop-250gr.html"
                                            title="Cà cherry đỏ (bán theo hộp 250gr)">Cà cherry đỏ (bán theo hộp
                                            250gr)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">20,000₫</span>

                                        <span class="compare-price">26,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141218">
                                        <div class="product-cta" data-url="/products/ca-cherry-do-ban-theo-hop-250gr">
                                            <input type="hidden" name="id" value="1068141218" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063928"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/can-tay-huu-co-450g.html" title="Cần tây hữu cơ - 450g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Cần tây hữu cơ - 450g" data-image-scale="0.7" />

                                        <img loading="lazy" class="" width="480" height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_ef249a2a156c4e539f49da902d686169_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/can-tay-huu-co-450g">
                                            <a title="Xem nhanh" href="products/can-tay-huu-co-450g.html"
                                                data-handle="can-tay-huu-co-450g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/can-tay-huu-co-450g.html" title="Cần tây hữu cơ - 450g">Cần
                                            tây hữu cơ - 450g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">35,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141215">
                                        <div class="product-cta" data-url="/products/can-tay-huu-co-450g">
                                            <input type="hidden" name="id" value="1068141215" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063926"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/hanh-tay-500gr-goi.html" title="Hành tây (500gr/gói)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Hành tây (500gr/gói)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_a141b402d6514dd49a8bf03f2a220ab3_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_6097522e0d384811b6dda0bc1efd5afd_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 16%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/hanh-tay-500gr-goi">
                                            <a title="Xem nhanh" href="products/hanh-tay-500gr-goi.html"
                                                data-handle="hanh-tay-500gr-goi"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/hanh-tay-500gr-goi.html" title="Hành tây (500gr/gói)">Hành tây
                                            (500gr/gói)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">25,000₫</span>

                                        <span class="compare-price">29,900₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141213">
                                        <div class="product-cta" data-url="/products/hanh-tay-500gr-goi">
                                            <input type="hidden" name="id" value="1068141213" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063929"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/hanh-tay-tim-500g.html" title="Hành Tây Tím 500g">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Hành Tây Tím 500g" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_f943c1ed8904450485e2cc8d990eef5c_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_bc7a12f393c54472baed782106431834_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 18%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/hanh-tay-tim-500g">
                                            <a title="Xem nhanh" href="products/hanh-tay-tim-500g.html"
                                                data-handle="hanh-tay-tim-500g"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/hanh-tay-tim-500g.html" title="Hành Tây Tím 500g">Hành Tây Tím
                                            500g</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">33,000₫</span>

                                        <span class="compare-price">40,250₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141216">
                                        <div class="product-cta" data-url="/products/hanh-tay-tim-500g">
                                            <input type="hidden" name="id" value="1068141216" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063927"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/khoai-tay-bi-500gr-goi.html" title="Khoai Tây Bi (500gr/gói)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Khoai Tây Bi (500gr/gói)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_f88089450e464aa1938e91743ac218c8_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_a7e8e15830bf4bb5b15083f3254067a1_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/khoai-tay-bi-500gr-goi">
                                            <a title="Xem nhanh" href="products/khoai-tay-bi-500gr-goi.html"
                                                data-handle="khoai-tay-bi-500gr-goi"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/khoai-tay-bi-500gr-goi.html"
                                            title="Khoai Tây Bi (500gr/gói)">Khoai Tây Bi (500gr/gói)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">20,000₫</span>

                                        <span class="compare-price">26,000₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141214">
                                        <div class="product-cta" data-url="/products/khoai-tay-bi-500gr-goi">
                                            <input type="hidden" name="id" value="1068141214" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063930"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/khoai-tay-hong-500gr-khay.html"
                                        title="Khoai Tây Hồng (500gr/khay)">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Khoai Tây Hồng (500gr/khay)" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_7ba9a4b85f66435cb5657c13ab19d98a_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_9a47b9ccdd924a7db51a2a2ac6dd4b27_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 23%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/khoai-tay-hong-500gr-khay">
                                            <a title="Xem nhanh" href="products/khoai-tay-hong-500gr-khay.html"
                                                data-handle="khoai-tay-hong-500gr-khay"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/khoai-tay-hong-500gr-khay.html"
                                            title="Khoai Tây Hồng (500gr/khay)">Khoai Tây Hồng (500gr/khay)</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">26,000₫</span>

                                        <span class="compare-price">33,800₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom" data-variant-id="1068141217">
                                        <div class="product-cta" data-url="/products/khoai-tay-hong-500gr-khay">
                                            <input type="hidden" name="id" value="1068141217" />
                                            <button
                                                class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                                                title="Thêm vào giỏ hàng">
                                                CHỌN MUA
                                            </button>
                                        </div>

                                        <div class="input_product">
                                            <div class="custom input_number_product custom-btn-number mb-0 mt-2">
                                                <button class="btn btn_num num_1 button button_qty" type="button">
                                                    <span></span>
                                                </button>
                                                <input type="text" name="quantity" value="1" maxlength="3"
                                                    class="form-control prd_quantity qty" />
                                                <button class="btn btn_num num_2 button button_qty" type="button">
                                                    <span></span><span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-6 col-md-15">
                        <div class="item_product_main">
                            <form action="https://ega-green.myharavan.com/cart/add" method="post"
                                class="variants product-action" data-id="product-actions-1031063925"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail pos-relative">
                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                        href="products/su-hao-huu-co.html" title="Su Hào Hữu Cơ">
                                        <img class="product-frame lazyload"
                                            src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png') }}?v=586"
                                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_1.png?v=586"
                                            alt="Su Hào Hữu Cơ" data-image-scale="0.7" />

                                        <img loading="lazy" class="product-thumbnail__img--primary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_9b646adf5deb4878bed94c8e8235ece1_medium.jpg') }}"
                                            alt="" />
                                        <img loading="lazy" class="product-thumbnail__img--secondary" width="480"
                                            height="480"
                                            src="{{ asset('product.hstatic.net/200000295082/product/upload_b00b3b5236ba4043b434e57bf3ac2317_medium.jpg') }}"
                                            alt="" />
                                    </a>

                                    <div class="label_product">
                                        <div class="label_wrapper">- 7%</div>
                                    </div>

                                    <div class="product-action">
                                        <div class="group_action" data-url="/products/su-hao-huu-co">
                                            <a title="Xem nhanh" href="products/su-hao-huu-co.html"
                                                data-handle="su-hao-huu-co"
                                                class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="products/su-hao-huu-co.html" title="Su Hào Hữu Cơ">Su Hào Hữu Cơ</a>
                                    </h3>

                                    <div class="price-box">
                                        <span class="price">26,000₫</span>

                                        <span class="compare-price">27,950₫</span>
                                    </div>

                                    <div class="fundiin fundiin-alert">
                                        Hoặc trả qua 3 kỳ với
                                        <span
                                            style="
                          color: #24c3fd;
                          font-size: 14px;
                          font-weight: bold;
                        ">Fundiin</span>
                                        <a style="font-size: 13px; text-decoration: underline"
                                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                            Tìm hiểu (?)</a>
                                        <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                            từ
                                            33,000₫)</span>
                                    </div>

                                    <div class="product-action-bottom">
                                        <div class="product-cta" data-url="/products/su-hao-huu-co">
                                            <input class="hidden" type="hidden" name="variantId"
                                                value="1068141212" />
                                            <button class="btn btn-cart btn-left btn left-to btn-main" title="Tùy chọn"
                                                type="button"
                                                onclick="window.location.href='products/su-hao-huu-co.html'">
                                                TÙY CHỌN
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="text-center my-3 col-12">
                    <a href="collections/rau-cu-qua.html" title="Xem tất cả" class="btn btn-main rounded-pill px-4">
                        Xem tất cả <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </section>

    <section class="section awe-section-8">
        <section class="section_banner_coll section">
            <div class="container px-md-0">
                <div class="row text-center justify-content-md-center justify-content-start">
                    <div class="item col-10 col-md-4 mt-2">
                        <a href="collections/all.html" title="thịt, hải sản tươi">
                            <img class="lazyload img-fluid"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQcAAABxCAIAAABXxfGYAAAACXBIWXMAABCcAAAQnAEmzTo0AAALuWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjJlZDViZTcxLWNhN2QtZDQ0NC05N2VjLWJkNmI2MGZlOWYyMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0iQTg2MkZFNEUyRjdCNjA1MkQ5MEFFOUQyMjkwNkQ2NEEiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTExLTE5VDA5OjQ5OjA4KzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgdGlmZjpJbWFnZVdpZHRoPSIyNjMiIHRpZmY6SW1hZ2VMZW5ndGg9IjExMyIgdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPSIyIiB0aWZmOk9yaWVudGF0aW9uPSIxIiB0aWZmOlNhbXBsZXNQZXJQaXhlbD0iMyIgdGlmZjpYUmVzb2x1dGlvbj0iMTA4LzEiIHRpZmY6WVJlc29sdXRpb249IjEwOC8xIiB0aWZmOlJlc29sdXRpb25Vbml0PSIyIiBleGlmOkV4aWZWZXJzaW9uPSIwMjMxIiBleGlmOkNvbG9yU3BhY2U9IjEiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIyNjMiIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIxMTMiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpiODk2NDI0Yi0zZWUzLTQ5NzMtYjdkNC03ZDRhZjY1YjgxNGIiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDQ6MDgrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGltYWdlL2pwZWcgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYTJmOWQxYy0yNTFhLTQyMWItYjgzZi1kZmEyNjk4NWY0ZjUiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MjQ6MTQrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0UmVmOmRvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIi8+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDoyZWQ1YmU3MS1jYTdkLWQ0NDQtOTdlYy1iZDZiNjBmZTlmMjA8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHRpZmY6Qml0c1BlclNhbXBsZT4gPHJkZjpTZXE+IDxyZGY6bGk+ODwvcmRmOmxpPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDwvcmRmOlNlcT4gPC90aWZmOkJpdHNQZXJTYW1wbGU+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WY965QAAAONJREFUeNrt00ERAAAIAyBv/btawfcyCB3IAi0DNCvACrACrAArwAqwAqwAK8AKsAKsACvACrACrAArACvACrACrAArwAqwAqwAK8AKsAKsACvACrACrACsACvACrACrAArwAqwAqwAK8AKsAKsACvACrACsAKsACvACrACrAArwAqwAqwAK8AKsAKsACvACsAKsAKsACvACrACrAArwAqwAqwAK8AKsAKsACsAK8AKsAKsACvACrACrAArwAqwAqwAK8AKsAKsAKwAK8AKsAKsACvACrACrAArwAqwAqwAK+CDAw1W4ZzUcmD3AAAAAElFTkSuQmCC"
                                data-src="//theme.hstatic.net/200000295082/1000772075/14/banner_coll_1.jpg?v=586"
                                alt="banner_coll_1_title" />
                        </a>
                    </div>

                    <div class="item col-10 col-md-4 mt-2">
                        <a href="collections/all.html" title="rau củ, nông sản Việt">
                            <img class="lazyload img-fluid"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQcAAABxCAIAAABXxfGYAAAACXBIWXMAABCcAAAQnAEmzTo0AAALuWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjJlZDViZTcxLWNhN2QtZDQ0NC05N2VjLWJkNmI2MGZlOWYyMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0iQTg2MkZFNEUyRjdCNjA1MkQ5MEFFOUQyMjkwNkQ2NEEiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTExLTE5VDA5OjQ5OjA4KzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgdGlmZjpJbWFnZVdpZHRoPSIyNjMiIHRpZmY6SW1hZ2VMZW5ndGg9IjExMyIgdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPSIyIiB0aWZmOk9yaWVudGF0aW9uPSIxIiB0aWZmOlNhbXBsZXNQZXJQaXhlbD0iMyIgdGlmZjpYUmVzb2x1dGlvbj0iMTA4LzEiIHRpZmY6WVJlc29sdXRpb249IjEwOC8xIiB0aWZmOlJlc29sdXRpb25Vbml0PSIyIiBleGlmOkV4aWZWZXJzaW9uPSIwMjMxIiBleGlmOkNvbG9yU3BhY2U9IjEiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIyNjMiIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIxMTMiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpiODk2NDI0Yi0zZWUzLTQ5NzMtYjdkNC03ZDRhZjY1YjgxNGIiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDQ6MDgrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGltYWdlL2pwZWcgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYTJmOWQxYy0yNTFhLTQyMWItYjgzZi1kZmEyNjk4NWY0ZjUiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MjQ6MTQrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0UmVmOmRvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIi8+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDoyZWQ1YmU3MS1jYTdkLWQ0NDQtOTdlYy1iZDZiNjBmZTlmMjA8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHRpZmY6Qml0c1BlclNhbXBsZT4gPHJkZjpTZXE+IDxyZGY6bGk+ODwvcmRmOmxpPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDwvcmRmOlNlcT4gPC90aWZmOkJpdHNQZXJTYW1wbGU+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WY965QAAAONJREFUeNrt00ERAAAIAyBv/btawfcyCB3IAi0DNCvACrACrAArwAqwAqwAK8AKsAKsACvACrACrAArACvACrACrAArwAqwAqwAK8AKsAKsACvACrACrACsACvACrACrAArwAqwAqwAK8AKsAKsACvACrACsAKsACvACrACrAArwAqwAqwAK8AKsAKsACvACsAKsAKsACvACrACrAArwAqwAqwAK8AKsAKsACsAK8AKsAKsACvACrACrAArwAqwAqwAK8AKsAKsAKwAK8AKsAKsACvACrACrAArwAqwAqwAK+CDAw1W4ZzUcmD3AAAAAElFTkSuQmCC"
                                data-src="//theme.hstatic.net/200000295082/1000772075/14/banner_coll_2.jpg?v=586"
                                alt="banner_coll_2_title" />
                        </a>
                    </div>

                    <div class="item col-10 col-md-4 mt-2">
                        <a href="collections/all.html" title="trái cây nhập khẩu">
                            <img class="lazyload img-fluid"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQcAAABxCAIAAABXxfGYAAAACXBIWXMAABCcAAAQnAEmzTo0AAALuWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjJlZDViZTcxLWNhN2QtZDQ0NC05N2VjLWJkNmI2MGZlOWYyMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0iQTg2MkZFNEUyRjdCNjA1MkQ5MEFFOUQyMjkwNkQ2NEEiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTExLTE5VDA5OjQ5OjA4KzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMS0xOVQxMDoyNDoxNCswNzowMCIgdGlmZjpJbWFnZVdpZHRoPSIyNjMiIHRpZmY6SW1hZ2VMZW5ndGg9IjExMyIgdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPSIyIiB0aWZmOk9yaWVudGF0aW9uPSIxIiB0aWZmOlNhbXBsZXNQZXJQaXhlbD0iMyIgdGlmZjpYUmVzb2x1dGlvbj0iMTA4LzEiIHRpZmY6WVJlc29sdXRpb249IjEwOC8xIiB0aWZmOlJlc29sdXRpb25Vbml0PSIyIiBleGlmOkV4aWZWZXJzaW9uPSIwMjMxIiBleGlmOkNvbG9yU3BhY2U9IjEiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIyNjMiIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIxMTMiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpiODk2NDI0Yi0zZWUzLTQ5NzMtYjdkNC03ZDRhZjY1YjgxNGIiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDQ6MDgrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGltYWdlL2pwZWcgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYTJmOWQxYy0yNTFhLTQyMWItYjgzZi1kZmEyNjk4NWY0ZjUiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MDc6NTMrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1YmQ2NmFlNC0zYmU0LTRkNDUtOTUxMC04YzhhNzk2ZjgyYzkiIHN0RXZ0OndoZW49IjIwMjAtMTEtMTlUMTA6MjQ6MTQrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzU2YTY4ZS1hY2Q5LTQ4NTAtYjE1MC1jMTkzNDY2NjMwMTkiIHN0UmVmOmRvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9IkE4NjJGRTRFMkY3QjYwNTJEOTBBRTlEMjI5MDZENjRBIi8+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDoyZWQ1YmU3MS1jYTdkLWQ0NDQtOTdlYy1iZDZiNjBmZTlmMjA8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHRpZmY6Qml0c1BlclNhbXBsZT4gPHJkZjpTZXE+IDxyZGY6bGk+ODwvcmRmOmxpPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDwvcmRmOlNlcT4gPC90aWZmOkJpdHNQZXJTYW1wbGU+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WY965QAAAONJREFUeNrt00ERAAAIAyBv/btawfcyCB3IAi0DNCvACrACrAArwAqwAqwAK8AKsAKsACvACrACrAArACvACrACrAArwAqwAqwAK8AKsAKsACvACrACrACsACvACrACrAArwAqwAqwAK8AKsAKsACvACrACsAKsACvACrACrAArwAqwAqwAK8AKsAKsACvACsAKsAKsACvACrACrAArwAqwAqwAK8AKsAKsACsAK8AKsAKsACvACrACrAArwAqwAqwAK8AKsAKsAKwAK8AKsAKsACvACrACrAArwAqwAqwAK+CDAw1W4ZzUcmD3AAAAAElFTkSuQmCC"
                                data-src="//theme.hstatic.net/200000295082/1000772075/14/banner_coll_3.jpg?v=586"
                                alt="banner_coll_3_title" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="section awe-section-9">
        <section class="section_product_top section">
            <div class="container py-2 card border-0">
                <div
                    class="title_module_main heading-bar e-tabs d-flex justify-content-between align-items-center flex-wrap">
                    <h2 class="heading-bar__title">
                        <a class="link" href="collections/san-pham-tet.html" title="DÀNH RIÊNG CHO BẠN">
                            DÀNH RIÊNG CHO BẠN
                        </a>
                    </h2>
                    <ul class="tabs tabs-title list-unstyled m-0 mt-2 tabs-group d-flex align-items-center">
                        <li class="ega-small tab-link px-3 py-2 link current" data-tab="tab-1">
                            Thịt & Hải sản
                        </li>

                        <li class="ega-small tab-link px-3 py-2 linkml-2" data-tab="tab-2">
                            Rau củ quả
                        </li>

                        <li class="ega-small tab-link px-3 py-2 linkml-2" data-tab="tab-3">
                            Trái cây
                        </li>
                    </ul>
                </div>
                <div class="e-tabs">
                    <div id="tab-1" class="tab-content content_extab current">
                        <div class="row mt-3" style="grid-template-columns: repeat(5, 40%)"
                            data-section="tab-section">
                            <script
                  type="text/x-custom-template"
                  data-template="tab-section"
                >

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063949" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/ca-basa-phi-le-400g" title="CÁ BASA PHI LÊ 400G">











                  			<img loading="lazy"
                  				 class='product-thumbnail__img--primary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_f059457a873a4b7dbbd41ef5e9147aae_medium.jpg" alt="">
                  						<img loading="lazy"
                  				 class='product-thumbnail__img--secondary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_a84802cdd8754ed5ac7ed115292f42d0_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/ca-basa-phi-le-400g">

                  				<a title="Xem nhanh" href="/products/ca-basa-phi-le-400g" data-handle="ca-basa-phi-le-400g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/ca-basa-phi-le-400g" title="CÁ BASA PHI LÊ 400G">CÁ BASA PHI LÊ 400G</a></h3>

                  		<div class="price-box">


                  			<span class="price">80,500₫</span>


                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141240"

                  			 >
                  				<div class="product-cta" data-url="/products/ca-basa-phi-le-400g">

                  				<input type="hidden" name="id" value="1068141240" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>

                  			<img class="product-badge lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/label_1c353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/label_1.png?v=586" alt="Giao Nhanh 24h"/>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063948" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/ca-thac-lac-300g" title="Cá Thu Tươi Cắt Khoanh">











                  			<img loading="lazy"
                  				 class='product-thumbnail__img--primary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_f76a23a006d54f8ab0be60ef5b8e05e3_medium.jpg" alt="">
                  						<img loading="lazy"
                  				 class='product-thumbnail__img--secondary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_d001a3738cb744dbb71fed705ba99705_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/ca-thac-lac-300g">

                  				<a title="Xem nhanh" href="/products/ca-thac-lac-300g" data-handle="ca-thac-lac-300g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/ca-thac-lac-300g" title="Cá Thu Tươi Cắt Khoanh">Cá Thu Tươi Cắt Khoanh</a></h3>

                  		<div class="price-box">


                  			<span class="price">250,000₫</span>


                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">83,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141239"

                  			 >
                  				<div class="product-cta" data-url="/products/ca-thac-lac-300g">

                  				<input type="hidden" name="id" value="1068141239" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>

                  			<img class="product-badge lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/label_1c353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/label_1.png?v=586" alt="Giao Nhanh 24h"/>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063950" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg" title="Hàu giống Pháp tươi sống size 12 - 15 con/kg (1KG)">











                  			<img loading="lazy"
                  				 class='product-thumbnail__img--primary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_1c89005779404d9badeea4dc15873b51_medium.jpg" alt="">
                  						<img loading="lazy"
                  				 class='product-thumbnail__img--secondary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_86ff59e29bef4720bfb46af116a22805_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg">

                  				<a title="Xem nhanh" href="/products/hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg" data-handle="hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg" title="Hàu giống Pháp tươi sống size 12 - 15 con/kg (1KG)">Hàu giống Pháp tươi sống size 12 - 15 con/kg (1KG)</a></h3>

                  		<div class="price-box">


                  			<span class="price">117,000₫</span>


                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">39,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141241"

                  			 >
                  				<div class="product-cta" data-url="/products/hau-giong-phap-tuoi-song-size-12-15-con-kg-1kg">

                  				<input type="hidden" name="id" value="1068141241" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>

                  			<img class="product-badge lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/label_1c353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/label_1.png?v=586" alt="Giao Nhanh 24h"/>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063946" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr" title="Mực Ống Phú Quốc, Hải Sản Biển Tự Nhiên Túi 500Gr">











                  			<img loading="lazy"
                  				 class='product-thumbnail__img--primary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_3532a5acd8a34615bf7bf2b59133ccda_medium.jpg" alt="">
                  						<img loading="lazy"
                  				 class='product-thumbnail__img--secondary'
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_304970e1f9db4e48b552db98de7fc270_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr">

                  				<a title="Xem nhanh" href="/products/muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr" data-handle="muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr" title="Mực Ống Phú Quốc, Hải Sản Biển Tự Nhiên Túi 500Gr">Mực Ống Phú Quốc, Hải Sản Biển Tự Nhiên Túi 500Gr</a></h3>

                  		<div class="price-box">


                  			<span class="price">268,000₫</span>


                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">89,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141236"

                  			 >
                  				<div class="product-cta" data-url="/products/muc-ong-phu-quoc-hai-san-bien-tu-nhien-tui-500gr">

                  				<input type="hidden" name="id" value="1068141236" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>

                  			<img class="product-badge lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/label_1c353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/label_1.png?v=586" alt="Giao Nhanh 24h"/>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">















































                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063945" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g" title="Phi Lê Cá Hồi Cắt Khúc Đông Lạnh">

















                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_2475550c56e548009dfaf513db115b78_medium.jpg" alt="">
                  					</a>

                  		<div class="label_product">
                  			<div class="label_wrapper">
                  				-
                  35%
                  			</div>
                  		</div>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g">

                  				<a title="Xem nhanh" href="/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g" data-handle="phi-le-ca-hoi-cat-khuc-dong-lanh-300g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g" title="Phi Lê Cá Hồi Cắt Khúc Đông Lạnh">Phi Lê Cá Hồi Cắt Khúc Đông Lạnh</a></h3>

                  		<div class="price-box">


                  			<span class="price">120,000₫</span>

                  			<span class="compare-price">184,000₫</span>



                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">40,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 >
                  				<div class="product-cta" data-url="/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g">

                  				<input class="hidden" type="hidden" name="variantId" value="1068141233" />
                  					<button class=" btn btn-cart btn-left  btn left-to btn-main" title="Tùy chọn" type="button" onclick="window.location.href='/products/phi-le-ca-hoi-cat-khuc-dong-lanh-300g'" >
                  				TÙY CHỌN
                  				</button>




                  			</div>


                  		</div>

                  			<img class="product-badge lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/label_1c353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/label_1.png?v=586" alt="Giao Nhanh 24h"/>


                  	</div>
                  </form>
                  						</div>
                  					</div>
                </script>
                        </div>

                        <div class="text-center my-3 col-12">
                            <a href="collections/hai-san-tuoi-song.html" title="Xem tất cả"
                                class="btn btn-main rounded-pill px-4">
                                Xem tất cả <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div id="tab-2" class="tab-content content_extab">
                        <div class="row mt-3" style="grid-template-columns: repeat(5, 40%)"
                            data-section="tab-section">
                            <script
                  type="text/x-custom-template"
                  data-template="tab-section"
                >

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">









































                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063934" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/chuoi-unifarm-kid-1kg" title="Chuối Unifarm Kid 1kg">













                  			<img class="product-frame lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586" alt="Chuối Unifarm Kid 1kg"
                  				 data-image-scale="1"
                  			 />


                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_f5795496a3184a48a844bc656ecd184f_medium.jpg" alt="">
                  					</a>

                  		<div class="label_product">
                  			<div class="label_wrapper">
                  				-
                  5%
                  			</div>
                  		</div>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/chuoi-unifarm-kid-1kg">

                  				<a title="Xem nhanh" href="/products/chuoi-unifarm-kid-1kg" data-handle="chuoi-unifarm-kid-1kg" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/chuoi-unifarm-kid-1kg" title="Chuối Unifarm Kid 1kg">Chuối Unifarm Kid 1kg</a></h3>

                  		<div class="price-box">


                  			<span class="price">25,500₫</span>

                  			<span class="compare-price">26,800₫</span>



                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141221"

                  			 >
                  				<div class="product-cta" data-url="/products/chuoi-unifarm-kid-1kg">

                  				<input type="hidden" name="id" value="1068141221" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">









































                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063973" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/dua-gang-trai-tron" title="Dưa gang trái tròn">













                  			<img class="product-frame lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586" alt="Dưa gang trái tròn"
                  				 data-image-scale="1"
                  			 />


                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_b36b1d0bd0e04566b74669fd602b466c_medium.jpg" alt="">
                  					</a>

                  		<div class="label_product">
                  			<div class="label_wrapper">
                  				-
                  22%
                  			</div>
                  		</div>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/dua-gang-trai-tron">

                  				<a title="Xem nhanh" href="/products/dua-gang-trai-tron" data-handle="dua-gang-trai-tron" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/dua-gang-trai-tron" title="Dưa gang trái tròn">Dưa gang trái tròn</a></h3>

                  		<div class="price-box">


                  			<span class="price">15,500₫</span>

                  			<span class="compare-price">19,800₫</span>



                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141272"

                  			 >
                  				<div class="product-cta" data-url="/products/dua-gang-trai-tron">

                  				<input type="hidden" name="id" value="1068141272" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063933" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/me-ngot-thai-hop-500g" title="Me Ngọt Thái Hộp 500g">













                  			<img class="product-frame lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586" alt="Me Ngọt Thái Hộp 500g"
                  				 data-image-scale="1"
                  			 />


                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_dde1a5bcfafe47179d0b2c9f070c030c_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/me-ngot-thai-hop-500g">

                  				<a title="Xem nhanh" href="/products/me-ngot-thai-hop-500g" data-handle="me-ngot-thai-hop-500g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/me-ngot-thai-hop-500g" title="Me Ngọt Thái Hộp 500g">Me Ngọt Thái Hộp 500g</a></h3>

                  		<div class="price-box">


                  			<span class="price">72,900₫</span>


                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141220"

                  			 >
                  				<div class="product-cta" data-url="/products/me-ngot-thai-hop-500g">

                  				<input type="hidden" name="id" value="1068141220" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">









































                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063932" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/tao-envy-size-70-1kg" title="Táo Envy Size 70 1Kg">













                  			<img class="product-frame lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586" alt="Táo Envy Size 70 1Kg"
                  				 data-image-scale="1"
                  			 />


                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_db47a9b50fc0433b881fbd7460e2d5ce_medium.jpg" alt="">
                  					</a>

                  		<div class="label_product">
                  			<div class="label_wrapper">
                  				-
                  15%
                  			</div>
                  		</div>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/tao-envy-size-70-1kg">

                  				<a title="Xem nhanh" href="/products/tao-envy-size-70-1kg" data-handle="tao-envy-size-70-1kg" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/tao-envy-size-70-1kg" title="Táo Envy Size 70 1Kg">Táo Envy Size 70 1Kg</a></h3>

                  		<div class="price-box">


                  			<span class="price">159,000₫</span>

                  			<span class="compare-price">188,000₫</span>



                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">53,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141219"

                  			 >
                  				<div class="product-cta" data-url="/products/tao-envy-size-70-1kg">

                  				<input type="hidden" name="id" value="1068141219" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">














































                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063935" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/tao-xanh-nhap-khau-500g" title="Táo Xanh Nhập Khẩu 500G">













                  			<img class="product-frame lazyload"
                  				 src="{{asset('theme.hstatic.net/200000295082/1000772075/14/product-placeholderc353.png')}}?v=586"
                  				 data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586" alt="Táo Xanh Nhập Khẩu 500G"
                  				 data-image-scale="1"
                  			 />


                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_2b1dc783a47149fd913fd2907c02adb4_medium.jpg" alt="">
                  					</a>

                  		<div class="label_product">
                  			<div class="label_wrapper">
                  				-
                  27%
                  			</div>
                  		</div>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/tao-xanh-nhap-khau-500g">

                  				<a title="Xem nhanh" href="/products/tao-xanh-nhap-khau-500g" data-handle="tao-xanh-nhap-khau-500g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/tao-xanh-nhap-khau-500g" title="Táo Xanh Nhập Khẩu 500G">Táo Xanh Nhập Khẩu 500G</a></h3>

                  		<div class="price-box">


                  			<span class="price">44,950₫</span>

                  			<span class="compare-price">61,750₫</span>



                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		 soldout"
                  			 >
                  				<div class="product-cta" data-url="/products/tao-xanh-nhap-khau-500g">

                  				<input class="hidden" type="hidden" name="variantId" value="1068141222" />
                  					<button class=" btn btn-cart btn-left  btn left-to btn-main" title="Tùy chọn" type="button" onclick="window.location.href='/products/tao-xanh-nhap-khau-500g'" >
                  				TÙY CHỌN
                  				</button>




                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>
                </script>
                        </div>

                        <div class="text-center my-3 col-12">
                            <a href="collections/trai-cay-viet-nam.html" title="Xem tất cả"
                                class="btn btn-main rounded-pill px-4">
                                Xem tất cả <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div id="tab-3" class="tab-content content_extab">
                        <div class="row mt-3" style="grid-template-columns: repeat(5, 40%)"
                            data-section="tab-section">
                            <script
                  type="text/x-custom-template"
                  data-template="tab-section"
                >

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063960" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/dau-han-quoc-250g-2" title="DÂU HÀN QUỐC 250G">








                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_df33cb78eef844b983932682f2cd8c0a_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/dau-han-quoc-250g-2">

                  				<a title="Xem nhanh" href="/products/dau-han-quoc-250g-2" data-handle="dau-han-quoc-250g-2" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/dau-han-quoc-250g-2" title="DÂU HÀN QUỐC 250G">DÂU HÀN QUỐC 250G</a></h3>

                  		<div class="price-box">


                  			<span class="price">149,000₫</span>


                  		</div>










                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">49,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141252"

                  			 >
                  				<div class="product-cta" data-url="/products/dau-han-quoc-250g-2">

                  				<input type="hidden" name="id" value="1068141252" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">


























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063975" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/nho-xanh-khong-hat-my" title="Nho xanh không hạt Mỹ">














                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_0c4e3477e5194b309ee6e3a150498f01_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/nho-xanh-khong-hat-my">

                  				<a title="Xem nhanh" href="/products/nho-xanh-khong-hat-my" data-handle="nho-xanh-khong-hat-my" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/nho-xanh-khong-hat-my" title="Nho xanh không hạt Mỹ">Nho xanh không hạt Mỹ</a></h3>

                  		<div class="price-box">


                  			<span class="price">169,000₫</span>


                  		</div>








x

                  <div class="fundiin" > hoặc <span style="color:black;font-weight:bold">56,000₫</span> x3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold"> Fundiin </span><a style="font-size: 13px; text-decoration: underline;" href="https://fundiin.vn/ecompopup/" target="_blank" > Tìm hiểu (?) </a> </div>


                  								<div class="product-action-bottom 		 soldout"
                  			 data-variant-id="1068141275"

                  			 >
                  				<div class="product-cta" data-url="/products/nho-xanh-khong-hat-my">

                  				<input type="hidden" name="id" value="1068141275" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"
                  								 disabled
                  								>
                  				HẾT HÀNG
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 	max="0"

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>

                  					<div class="col-12 col-md-15">
                  						<div class="item_product_main">



























                  <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-1031063963" enctype="multipart/form-data">
                  	<div class="product-thumbnail pos-relative">
                  		<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/truong-an-bi-do-tron" title="TRƯỜNG AN -BÍ ĐỎ TRÒN">








                  			<img loading="lazy"
                  				 class=''
                  				 width="480"
                  				 height="480"
                  				 src="//product.hstatic.net/200000295082/product/upload_424b635327b2416b901c2276091733cc_medium.jpg" alt="">
                  					</a>

                  		<div class="product-action">
                  						<div class="group_action" data-url="/products/truong-an-bi-do-tron">

                  				<a title="Xem nhanh" href="/products/truong-an-bi-do-tron" data-handle="truong-an-bi-do-tron" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  					<i class="fas fa-search"></i>
                  				</a>

                  			</div>
                  					</div>
                  	</div>
                  	<div class="product-info">
                  		<h3 class="product-name"><a href="/products/truong-an-bi-do-tron" title="TRƯỜNG AN -BÍ ĐỎ TRÒN">TRƯỜNG AN -BÍ ĐỎ TRÒN</a></h3>

                  		<div class="price-box">


                  			<span class="price">22,000₫</span>


                  		</div>












                  <div class="fundiin fundiin-alert">
                  	Hoặc trả qua 3 kỳ với <span style="color:#24c3fd;font-size:14px;font-weight:bold">Fundiin</span> <a style="font-size: 13px; text-decoration: underline;" onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"> Tìm hiểu (?)</a>
                  	<br><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước từ 33,000₫)</span>
                  </div>




                  								<div class="product-action-bottom 		"
                  			 data-variant-id="1068141256"

                  			 >
                  				<div class="product-cta" data-url="/products/truong-an-bi-do-tron">

                  				<input type="hidden" name="id" value="1068141256" />
                  				<button
                  								class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active " title="Thêm vào giỏ hàng"

                  								>
                  				 CHỌN MUA
                  				</button>



                  			</div>


                  			<div  class="input_product">
                  						<div class="custom input_number_product custom-btn-number mb-0 mt-2 ">
                  					<button class="btn btn_num num_1 button button_qty" type="button"><span></span></button>
                  					<input type="text"  name="quantity" value="1"
                  								 maxlength="3" class="form-control prd_quantity qty "

                  								 >
                  					<button class="btn btn_num num_2 button button_qty"type="button"><span></span><span></span></button>
                  				</div>
                  			</div>


                  		</div>


                  	</div>
                  </form>
                  						</div>
                  					</div>
                </script>
                        </div>

                        <div class="text-center my-3 col-12">
                            <a href="collections/trai-cay-nhap-khau.html" title="Xem tất cả"
                                class="btn btn-main rounded-pill px-4">
                                Xem tất cả <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="section awe-section-10">
        <section class="section_blog section">
            <div class="container card border-0 py-3">
                <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                    <h2 class="heading-bar__title">
                        <a class="link" href="blogs/tin-tuc-2.html" title="CHIA SẺ BÍ QUYẾT">CHIA SẺ BÍ QUYẾT</a>
                    </h2>

                    <div class="heading-bar__action d-md-block d-none">
                        <a href="blogs/tin-tuc-2.html" title="Xem tất cả" class="link more">
                            Xem tất cả <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="home-news-slider mt-3" style="--blog-bg: #f0fbf5">
                    <div class="news-item">
                        <div class="home-news">
                            <div class="home-news__img embed-responsive">
                                <img class="lazyload"
                                    src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/article-placeholderc353.png') }}?v=586"
                                    data-src="https://file.hstatic.net/200000295082/article/upload_f1856d0a67634bf9a19e879069f7313b.jpg"
                                    alt="Thử ngay món cồi sò điệp xào bông cải cả nhà cùng thích mê" />
                            </div>
                            <div class="home-news__info">
                                <div class="news-content">
                                    <h3 class="mb-3">
                                        <a href="blogs/tin-tuc-2/thu-ngay-mon-coi-so-diep-xao-bong-cai-ca-nha-cung-thich-me.html"
                                            title="Thử ngay món cồi sò điệp xào bông cải cả nhà cùng thích mê">
                                            Thử ngay món cồi sò điệp xào bông cải cả nhà cùng thích
                                            mê
                                        </a>
                                    </h3>
                                    <p>
                                        Cồi sò điệp có sẵn vị ngọt, bùi nên thông thường khi chế
                                        biến các&nbsp;món ăn&nbsp;đơn giản thôi cũng đủ thơm ngon
                                        vô cùng rồi. Không...
                                    </p>

                                    <a href="blogs/tin-tuc-2/thu-ngay-mon-coi-so-diep-xao-bong-cai-ca-nha-cung-thich-me.html"
                                        class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="home-news">
                            <div class="home-news__img embed-responsive">
                                <img class="lazyload"
                                    src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/article-placeholderc353.png') }}?v=586"
                                    data-src="https://file.hstatic.net/200000295082/article/upload_af95a202fa1842c7a697da9b44a4b8fa.jpg"
                                    alt="Lạ miệng với bí nụ xào tôm giòn, ngon khó cưỡng" />
                            </div>
                            <div class="home-news__info">
                                <div class="news-content">
                                    <h3 class="mb-3">
                                        <a href="blogs/tin-tuc-2/la-mieng-voi-bi-nu-xao-tom-gion-ngon-kho-cuong.html"
                                            title="Lạ miệng với bí nụ xào tôm giòn, ngon khó cưỡng">
                                            Lạ miệng với bí nụ xào tôm giòn, ngon khó cưỡng
                                        </a>
                                    </h3>
                                    <p>
                                        Bí nụ không chỉ giúp tăng cường sự phát triển của não bộ,
                                        mà còn hỗ trợ ngăn ngừa các căn bệnh huyết áp, tim
                                        mạch....
                                    </p>

                                    <a href="blogs/tin-tuc-2/la-mieng-voi-bi-nu-xao-tom-gion-ngon-kho-cuong.html"
                                        class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="home-news">
                            <div class="home-news__img embed-responsive">
                                <img class="lazyload"
                                    src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/article-placeholderc353.png') }}?v=586"
                                    data-src="https://file.hstatic.net/200000295082/article/upload_1397c2e25d2543b09b452a9fbf01bb25.jpg"
                                    alt="Cách làm tàu hũ ky khìa nước dừa thơm ngon đậm vị" />
                            </div>
                            <div class="home-news__info">
                                <div class="news-content">
                                    <h3 class="mb-3">
                                        <a href="blogs/tin-tuc-2/cach-lam-tau-hu-ky-khia-nuoc-dua-thom-ngon-dam-vi.html"
                                            title="Cách làm tàu hũ ky khìa nước dừa thơm ngon đậm vị">
                                            Cách làm tàu hũ ky khìa nước dừa thơm ngon đậm vị
                                        </a>
                                    </h3>
                                    <p>
                                        Tàu hủ ky là một nguyên liệu thường được dùng trong các
                                        món chay. Tàu hủ ky vừa thơm ngon, dễ ăn mà lại được
                                        mệnh...
                                    </p>

                                    <a href="blogs/tin-tuc-2/cach-lam-tau-hu-ky-khia-nuoc-dua-thom-ngon-dam-vi.html"
                                        class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="home-news">
                            <div class="home-news__img embed-responsive">
                                <img class="lazyload"
                                    src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/article-placeholderc353.png') }}?v=586"
                                    data-src="https://file.hstatic.net/200000295082/article/upload_6e64827e28b347c6a25f2d069953cd72.jpg"
                                    alt="Ngán chả lụa heo hãy thử ngay cách làm chả lụa gà giòn dai cho ngày tết năm nay nhé" />
                            </div>
                            <div class="home-news__info">
                                <div class="news-content">
                                    <h3 class="mb-3">
                                        <a href="blogs/tin-tuc-2/ngan-cha-lua-heo-hay-thu-ngay-cach-lam-cha-lua-ga-gion-dai-cho-ngay-tet-nam-nay-nhe.html"
                                            title="Ngán chả lụa heo hãy thử ngay cách làm chả lụa gà giòn dai cho ngày tết năm nay nhé">
                                            Ngán chả lụa heo hãy thử ngay cách làm chả lụa gà giòn
                                            dai cho ngày tết năm nay nhé
                                        </a>
                                    </h3>
                                    <p>
                                        Chả lụa&nbsp;heo là một&nbsp;món&nbsp;phụ phổ biến trên
                                        bàn ăn ngày Tết từ bao lâu nay với hương vị thơm ngon mà
                                        còn để được lâu. Hôm...
                                    </p>

                                    <a href="blogs/tin-tuc-2/ngan-cha-lua-heo-hay-thu-ngay-cach-lam-cha-lua-ga-gion-dai-cho-ngay-tet-nam-nay-nhe.html"
                                        class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="home-news">
                            <div class="home-news__img embed-responsive">
                                <img class="lazyload"
                                    src="{{ asset('theme.hstatic.net/200000295082/1000772075/14/article-placeholderc353.png') }}?v=586"
                                    data-src="https://file.hstatic.net/200000295082/article/upload_276b46ebe1b944a4a169008f0690e5f3.jpg"
                                    alt="4 công thức sinh tố cải kale ngon miệng, tốt dáng, đẹp da" />
                            </div>
                            <div class="home-news__info">
                                <div class="news-content">
                                    <h3 class="mb-3">
                                        <a href="blogs/tin-tuc-2/4-cong-thuc-sinh-to-cai-kale-ngon-mieng-tot-dang-dep-da.html"
                                            title="4 công thức sinh tố cải kale ngon miệng, tốt dáng, đẹp da">
                                            4 công thức sinh tố cải kale ngon miệng, tốt dáng, đẹp
                                            da
                                        </a>
                                    </h3>
                                    <p>
                                        Cải kale có vị đắng tưởng chừng sẽ rất khó uống, tuy nhiên
                                        nếu bạn kết hợp với các loại trái cây khác nhau sẽ tạo...
                                    </p>

                                    <a href="blogs/tin-tuc-2/4-cong-thuc-sinh-to-cai-kale-ngon-mieng-tot-dang-dep-da.html"
                                        class="btn btn-main px-4 rounded-pill" title="Xem chi tiết">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
