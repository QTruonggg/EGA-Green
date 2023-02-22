<div class="wrap_background_aside asidecollection mt-4">
    <div class="product-sidebar">
        <div class="">
            <h3 class="product-sidebar__title"
                style="
            font-size: 1rem;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            margin: 0px;
            background: var(--primary-color);
            margin-bottom: 0.75rem;
          ">
                <a style="font-size: 1rem; color: #fff" href="../trai-cay-viet-nam.html" title="Có thể bạn sẽ thích">
                    Có thể bạn sẽ thích
                </a>
            </h3>
        </div>
        <div class="product-sidebar-title">


            @foreach ($product_like as $product_like)
                <div class="item_product_main product--media">
                    <form action="https://ega-green.myharavan.com/cart/add" method="post"
                        class="variants product-action" data-id="product-actions-1031063934"
                        enctype="multipart/form-data">
                        <div class="product-thumbnail pos-relative">
                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                href="/sanpham/{{$product_like->id}}-{{$product_like->name}} title="Chuối Unifarm Kid 1kg">
                                <img class="product-frame lazyload" src="{{ $product_like->images }}"
                                    data-src="//theme.hstatic.net/200000295082/1000772075/14/frame_3.png?v=586"
                                    alt="Chuối Unifarm Kid 1kg" data-image-scale="1" />

                                <img loading="lazy" class="" width="480" height="480"
                                    src="{{ $product_like->images }}" alt="" />
                            </a>

                            <div class="label_product">
                                <div class="label_wrapper">{{ $product_like->percent_discount }}%</div>
                            </div>

                            <div class="product-action">
                                <div class="group_action" data-url="/products/chuoi-unifarm-kid-1kg">
                                    <a title="Xem nhanh" href="../products/chuoi-unifarm-kid-1kg.html"
                                        data-handle="chuoi-unifarm-kid-1kg"
                                        class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">
                                <a href="../products/chuoi-unifarm-kid-1kg.html"
                                    title="{{ $product_like->name }}">{{ $product_like->name }}</a>
                            </h3>

                            <div class="price-box">
                                <span class="price">{{ $product_like->salePrice }}đ</span>

                                <span class="compare-price">{{ $product_like->oldPrice }}đ</span>
                            </div>

                            <div class="fundiin fundiin-alert">
                                Hoặc trả qua 3 kỳ với
                                <span style="color: #24c3fd; font-size: 14px; font-weight: bold;">
                                    Fundiin
                                </span>
                                <a style="font-size: 13px; text-decoration: underline;"
                                    onClick="$('#quick-view-product').modal('hide');$('#ega-modal-fundiin').modal('show')">
                                    Tìm hiểu (?)</a>
                                <br /><span class="fundiin-mess">(áp dụng cho đơn hàng từ 100,000₫, chỉ trả trước
                                    từ 33,000₫)</span>
                            </div>

                            <div class="product-action-bottom" data-variant-id="1068141221">
                                <div class="product-cta" data-url="/products/chuoi-unifarm-kid-1kg">
                                    <input type="hidden" name="id" value="1068141221" />
                                    <button class="btn-buy btn-cart btn-left btn left-to add_to_cart btn-main active"
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
            @endforeach


        </div>
    </div>
</div>
