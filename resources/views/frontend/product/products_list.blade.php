<div class="section wrap_background">
    <div class="container">
      <div class="bg_collection section">
        <div class="row">

            <aside
            class="scroll card py-2 dqdt-sidebar sidebar left-content col-xl-3 col-lg-3 col-md-12 col-sm-12"
          >
            <div class="wrap_background_aside asidecollection">
              <div class="filter-content aside-filter">
                <div class="filter-container">
                  <button class="btn d-block d-lg-none open-filters p-0">
                    <i class="fa fa-arrow-left mr-3"> </i>
                    <b class="d-inline"> Tìm theo </b>
                  </button>
                  <div
                    class="filter-container__selected-filter"
                    style="display: none"
                  >
                    <div
                      class="filter-container__selected-filter-header clearfix d-none"
                    >
                      <span
                        class="filter-container__selected-filter-header-title"
                        ><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn
                        chọn</span
                      >
                      <a
                        href="javascript:void(0)"
                        onclick="clearAllFiltered()"
                        class="filter-container__clear-all"
                        >Bỏ hết <i class="fa fa-angle-right"></i
                      ></a>
                    </div>
                  </div>
                  <!-- Lọc Hãng -->

                  <aside class="aside-item filter-vendor">
                    <div class="aside-title">
                      <h2 class="title-head margin-top-0">
                        <span>Thương hiệu</span>
                      </h2>
                    </div>
                    <div class="aside-content filter-group">
                      <ul>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-vendor-khac"
                            >
                              <input
                                type="checkbox"
                                id="filter-vendor-khac"
                                data-group="PRODUCT_VENDOR"
                                data-field="vendor"
                                data-text=""
                                value="product contains Khác"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Khác
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-vendor-ega-green"
                            >
                              <input
                                type="checkbox"
                                id="filter-vendor-ega-green"
                                data-group="PRODUCT_VENDOR"
                                data-field="vendor"
                                data-text=""
                                value="product contains EGA GREEN"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              EGA GREEN
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-vendor-ega"
                            >
                              <input
                                type="checkbox"
                                id="filter-vendor-ega"
                                data-group="PRODUCT_VENDOR"
                                data-field="vendor"
                                data-text=""
                                value="product contains EGA"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              EGA
                            </label>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </aside>

                  <!-- Lọc theo Tag (Màu sắc)-->
                  <!-- End Lọc theo Tag (Màu sắc)-->

                  <aside class="aside-item filter-price dq-filterxx">
                    <div class="aside-title">
                      <h2 class="title-head margin-top-0">
                        <span>Mức giá </span>
                      </h2>
                    </div>
                    <div class="aside-content filter-group scroll">
                      <div class="showstt d-none">
                        <!--<span>Mức giá</span> -->
                      </div>
                      <ul style="">
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-duoi-100-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-duoi-100-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="Dưới 100.000đ"
                                value="(price:product <100000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Giá dưới 100.000đ
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-100-000d-200-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-100-000d-200-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="100.000đ - 200.000đ"
                                value="(price:product >=100000) && (price:product<=200000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              100.000đ - 200.000đ
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-200-000d-300-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-200-000d-300-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="200.000đ - 300.000đ"
                                value="(price:product >=200000) && (price:product<=300000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              200.000đ - 300.000đ
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-300-000d-500-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-300-000d-500-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="300.000đ - 500.000đ"
                                value="(price:product >=300000) && (price:product<=500000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              300.000đ - 500.000đ
                            </label>
                          </span>
                        </li>

                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-500-000d-1-000-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-500-000d-1-000-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="500.000đ - 1.000.000đ"
                                value="(price:product >=500000 )&& (price:product <=1000000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              500.000đ - 1.000.000đ
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-tren1-000-000d"
                            >
                              <input
                                type="checkbox"
                                id="filter-tren1-000-000d"
                                onchange=""
                                data-group="Khoảng giá"
                                data-field="price"
                                data-text="Trên 1.000.000đ"
                                value="(price:product >=1000000)"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Giá trên 1.000.000đ
                            </label>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </aside>

                  <!-- Lọc Loại -->

                  <aside class="aside-item aside-itemxx filter-type">
                    <div class="aside-title">
                      <h2 class="title-head margin-top-0">
                        <span>Loại</span>
                      </h2>
                    </div>
                    <div class="aside-content filter-group scroll">
                      <ul>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-khac"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-khac"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Khác"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Khác
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-thuc-pham"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-thuc-pham"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Thực phẩm"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Thực phẩm
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-thuc-pham-tuoi-song"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-thuc-pham-tuoi-song"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Thực phẩm tươi sống"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Thực phẩm tươi sống
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-nhap-khau"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-nhap-khau"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Nhập khẩu"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Nhập khẩu
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-nong-san-viet"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-nong-san-viet"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Nông sản Việt"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Nông sản Việt
                            </label>
                          </span>
                        </li>
                        <li
                          class="filter-item filter-item--check-box filter-item--green overflow-item"
                        >
                          <span>
                            <label
                              class="custom-checkbox"
                              for="filter-type-nhiet-doi"
                            >
                              <input
                                type="checkbox"
                                id="filter-type-nhiet-doi"
                                data-group="PRODUCT_TYPE"
                                data-field="product_type"
                                data-text=""
                                value="product contains Nhiệt đới"
                                data-operator="||"
                              />
                              <i class="fa"></i>
                              Nhiệt đới
                            </label>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </aside>
                  <!-- End Lọc Loại -->
                </div>
              </div>
            </div>
            <div class="wrap_background_aside asidecollection mt-4">
              <div class="product-sidebar">
                <div class="">
                  <h3
                    class="product-sidebar__title"
                    style="
                      font-size: 1rem;
                      color: #fff;
                      padding: 10px;
                      border-radius: 4px;
                      margin: 0px;
                      background: var(--primary-color);
                      margin-bottom: 0.75rem;
                    "
                  >
                    <a
                      style="font-size: 1rem; color: #fff"
                      href="../trai-cay-viet-nam.html"
                      title="Có thể bạn sẽ thích"
                    >
                      Có thể bạn sẽ thích
                    </a>
                  </h3>
                </div>
                <div class="product-sidebar-title">
                  

                @foreach($product_like as $product_like)
                  <div class="item_product_main product--media">
                    <form
                      action="https://ega-green.myharavan.com/cart/add"
                      method="post"
                      class="variants product-action"
                      data-id="product-actions-1031063934"
                      enctype="multipart/form-data"
                    >
                      <div class="product-thumbnail pos-relative">
                        <a
                          class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                          href="../products/chuoi-unifarm-kid-1kg.html"
                          title="Chuối Unifarm Kid 1kg"
                        >
                          <img
                            class="product-frame lazyload"
                            src="{{$product_like->images}}"
                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                            alt="Chuối Unifarm Kid 1kg"
                            data-image-scale="1"
                          />

                          <img
                            loading="lazy"
                            class=""
                            width="480"
                            height="480"
                            src="{{$product_like->images}}"
                            alt=""
                          />
                        </a>

                        <div class="label_product">
                          <div class="label_wrapper">{{$product_like->percent_discount}}%</div>
                        </div>

                        <div class="product-action">
                          <div
                            class="group_action"
                            data-url="/products/chuoi-unifarm-kid-1kg"
                          >
                            <a
                              title="Xem nhanh"
                              href="../products/chuoi-unifarm-kid-1kg.html"
                              data-handle="chuoi-unifarm-kid-1kg"
                              class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view"
                            >
                              <i class="fas fa-search"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name">
                          <a
                            href="../products/chuoi-unifarm-kid-1kg.html"
                            title="{{$product_like->name}}"
                            >{{$product_like->name}}</a
                          >
                        </h3>

                        <div class="price-box">
                          <span class="price">{{$product_like->salePrice}}đ</span>

                          <span class="compare-price">{{$product_like->oldPrice}}đ</span>
                        </div>

                        <div class="fundiin fundiin-alert">
                          Hoặc trả qua 3 kỳ với
                          <span
                            style="
                              color: #24c3fd;
                              font-size: 14px;
                              font-weight: bold;
                            "
                            >Fundiin</span
                          >
                          <a
                            style="
                              font-size: 13px;
                              text-decoration: underline;
                            "
                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"
                          >
                            Tìm hiểu (?)</a
                          >
                          <br /><span class="fundiin-mess"
                            >(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                            từ 33,000₫)</span
                          >
                        </div>

                        <div
                          class="product-action-bottom"
                          data-variant-id="1068141221"
                        >
                          <div
                            class="product-cta"
                            data-url="/products/chuoi-unifarm-kid-1kg"
                          >
                            <input
                              type="hidden"
                              name="id"
                              value="1068141221"
                            />
                            <button
                              class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
                              title="Thêm vào giỏ hàng"
                            >
                              CHỌN MUA
                            </button>
                          </div>

                          <div class="input_product">
                            <div
                              class="custom input_number_product custom-btn-number mb-0 mt-2"
                            >
                              <button
                                class="btn btn_num num_1 button button_qty"
                                type="button"
                              >
                                <span></span>
                              </button>
                              <input
                                type="text"
                                name="quantity"
                                value="1"
                                maxlength="3"
                                class="form-control prd_quantity qty"
                              />
                              <button
                                class="btn btn_num num_2 button button_qty"
                                type="button"
                              >
                                <span></span><span></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                @endforeach


                </div>
              </div>
            </div>
          </aside>


          <div class="card py-2 main_container collection col-xl-9 col-lg-9 px-4 col-md-12 col-sm-12">
            <div class="collection_banner mb-4">
              <a href="all.html" title="Ảnh banner">
                <picture>
                  <source
                    media="(min-width: 768px)"
                    srcset="
                      //theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586
                    "
                    data-srcset="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586"
                  />
                  <source
                    media="(max-width: 767px)"
                    srcset="
                      //theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586
                    "
                    data-srcset="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner_large.jpg?v=586"
                  />
                  <img
                    src="../../theme.hstatic.net/200000295082/1000772075/14/collection_main_banner_picoc353.jpg?v=586"
                    class="lazyload img-fluid"
                    data-src="//theme.hstatic.net/200000295082/1000772075/14/collection_main_banner.jpg?v=586"
                    alt="Ảnh banner"
                  />
                </picture>
              </a>
            </div>

            <h1 class="title_page collection-title mb-0">Tất cả sản phẩm</h1>
            <div class="filter-content aside-filter">
              <div class="filter-container">
                <div
                  class="filter-container__selected-filter"
                  style="display: none"
                >
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
                <div
                  class="d-flex justify-content-between align-items-baseline"
                >
                  <div class="sortPagiBar">
                    <div class="sort-cate clearfix">
                      <div id="sort-by" class="d-flex align-items-baseline">
                        <label class="left">
                          <span class="">Sắp xếp: </span></label
                        >
                        <ul class="ul_col ml-2 mb-0">
                          <li>
                            <span
                              class="d-flex d-lg-none align-items-center justify-content-between"
                              >Thứ tự
                            </span>
                            <i class="fas fa-chevron-down float-right"></i>
                            <ul class="content_ul">
                              <li data-sort="name:asc">
                                <a
                                  class="link"
                                  href="javascript:;"
                                  onclick="sortby('alpha-asc')"
                                  >Tên A &rarr; Z</a
                                >
                              </li>
                              <li data-sort="name:desc">
                                <a
                                  class="link"
                                  href="javascript:;"
                                  onclick="sortby('alpha-desc')"
                                  >Tên Z &rarr; A</a
                                >
                              </li>
                              <li data-sort="price_min:asc">
                                <a
                                  class="link"
                                  href="javascript:;"
                                  onclick="sortby('price-asc')"
                                  >Giá tăng dần</a
                                >
                              </li>
                              <li data-sort="price_min:desc">
                                <a
                                  class="link"
                                  href="javascript:;"
                                  onclick="sortby('price-desc')"
                                  >Giá giảm dần</a
                                >
                              </li>
                              <li data-sort="created_on:desc">
                                <a
                                  class="link"
                                  href="javascript:;"
                                  onclick="sortby('created-desc')"
                                  >Hàng mới
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div
                    id="open-filters"
                    class="btn open-filters d-lg-none d-block"
                  >
                    <i class="fa fa-filter"></i>
                    <span>Lọc</span>
                  </div>
                </div>
              </div>

              <section
                class="products-view products-view-grid collection_reponsive list_hover_pro"
              >
                <div class="row content-col">

                @foreach($product as $product)
                <div class="col-6 col-sm-3 product-col">
                  <div class="item_product_main">
                    <form
                      action="https://ega-green.myharavan.com/cart/add"
                      method="post"
                      class="variants product-action"
                      data-id="product-actions-1031063978"
                      enctype="multipart/form-data"
                    >
                      <div class="product-thumbnail pos-relative">
                        <a
                          class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                          href="../sanpham/{{$product->id}}-{{$product->seo_title}}"
                          title="{{$product->name}}"
                        >
                          <img
                            class="product-frame lazyload"
                            src="{{$product->images}}"
                            data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                            alt="{{$product->name}}"
                            data-image-scale="1"
                          />

                          <img
                            loading="lazy"
                            class=""
                            width="480"
                            height="480"
                            src="{{$product->images}}"
                            alt=""
                          />
                        </a>

                        <div class="product-action">
                          <div
                            class="group_action"
                            data-url="/products/xoai-keo"
                          >
                            <a
                              title="Xem nhanh"
                              href="../products/xoai-keo.html"
                              data-handle="xoai-keo"
                              class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view"
                            >
                              <i class="fas fa-search"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name">
                          <a
                            href="../products/xoai-keo.html"
                            title="{{$product->name}}"
                            >{{$product->name}}</a
                          >
                        </h3>

                        <div class="price-box">
                          <span class="price">{{$product->salePrice}}đ</span>
                        </div>

                        <div class="fundiin fundiin-alert">
                          Hoặc trả qua 3 kỳ với
                          <span
                            style="
                              color: #24c3fd;
                              font-size: 14px;
                              font-weight: bold;
                            "
                            >Fundiin</span
                          >
                          <a
                            style="
                              font-size: 13px;
                              text-decoration: underline;
                            "
                            onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')"
                          >
                            Tìm hiểu (?)</a
                          >
                          <br /><span class="fundiin-mess"
                            >(áp dụng cho đơn hàng từ 100,000₫, chỉ trả
                            trước từ 33,000₫)</span
                          >
                        </div>

                        <div class="product-action-bottom soldout">
                          <div
                            class="product-cta"
                            data-url="/products/xoai-keo"
                          >
                            <input
                              class="hidden"
                              type="hidden"
                              name="variantId"
                              value="1068141280"
                            />
                            <button
                              class="btn btn-cart btn-left btn left-to btn-main"
                              title="Tùy chọn"
                              type="button"
                              onclick="window.location.href='../products/xoai-keo.html'"
                            >
                              TÙY CHỌN
                            </button>
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
                        <a class="page-link" href="#"
                          ><i class="fa fa-angle-left"></i
                        ></a>
                      </li>

                      <li class="active page-item disabled">
                        <a class="page-link" href="javascript:;">1</a>
                      </li>

                      <li class="page-item">
                        <a
                          class="page-link"
                          onclick="doSearch(2)"
                          href="allcf0d.html?&amp;page=2&amp;view=grid"
                          >2</a
                        >
                      </li>

                      <li class="page-item">
                        <a
                          class="page-link"
                          onclick="doSearch(3)"
                          href="all4131.html?&amp;page=3&amp;view=grid"
                          >3</a
                        >
                      </li>

                      <li class="page-item">
                        <a
                          class="page-link"
                          onclick="doSearch(4)"
                          href="all65a8.html?&amp;page=4&amp;view=grid"
                          >4</a
                        >
                      </li>

                      <li class="page-item">
                        <a
                          class="page-link"
                          onclick="doSearch(2)"
                          href="allcf0d.html?&amp;page=2&amp;view=grid"
                          ><i
                            class="fa fa-angle-right"
                            aria-hidden="true"
                          ></i>
                        </a>
                      </li>
                      <li class="page-item">
                        <a
                          class="page-link"
                          onclick="doSearch(4)"
                          href="all65a8.html?&amp;page=4&amp;view=grid"
                          ><i
                            class="fas fa-angle-double-right"
                            aria-hidden="true"
                          ></i>
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
  <section class="section" id="recent-view-coll">
    <div class="container card py-2">
      <div
        class="title_module heading-bar d-flex justify-content-between align-items-center"
      >
        <h2 class="bf_flower heading-bar__title">Sản phẩm đã xem</h2>
      </div>
      <div class="recent-view-list row"></div>

      <script>
        let data = [];
        function getProductByView(handle) {
          return $.ajax({
            url: `/products/${handle}?view=product-item`,
            success: function (res) {
              data.push(res);
            },
          });
        }
        function renderRecentView(data, query) {
          if (data && data.length) {
            let wrapper = $(query).find(".recent-view-list");
            data = data
              .map((item) => {
                let coll =
                  data.size >= 5 ? `col-md-12 col-5` : `col-5 col-md-3`;
                return `<div class="${coll}">
                              ${item}
                          </div>`;
              })
              .join("");
            wrapper.html(data);
            awe_lazyloadImage();
            if (window.BPR && window.BPR.loadBadges) {
              window.BPR.initDomEls(), window.BPR.loadBadges();
            }
            window.matchMedia("(min-width: 768px)").matches &&
              wrapper.find(".item_product_main").length >= 5 &&
              $(`${query} .recent-view-list`).slick({
                autoplay: false,
                autoplaySpeed: 6000,
                dots: false,
                arrows: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                centerMode: false,
                responsive: [
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 4,
                    },
                  },
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 4,
                    },
                  },
                  {
                    breakpoint: 991,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                    },
                  },
                  {
                    breakpoint: 767,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2,
                    },
                  },
                ],
              });
          } else {
            $(query).remove();
          }
        }
        function getRecentView(query) {
          try {
            let storage =
              JSON.parse(localStorage.getItem("recentProduct")) || [];
            if (storage && storage.length && Array.isArray(storage)) {
              //	$.when.apply($, my_array).then( ___ )
              let getProductArr = storage.map((handle) =>
                getProductByView(handle)
              );
              $.when.apply($, getProductArr).then(
                () => {
                  renderRecentView(data, query);
                },
                () => {
                  renderRecentView(data, query);
                }
              );
            } else {
              $(query).remove();
            }
          } catch (e) {
            console.log(e);
          }
        }
      </script>
    </div>
  </section>
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