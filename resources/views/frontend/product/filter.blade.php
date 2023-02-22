<!-- Lọc Hãng -->

<aside class="aside-item filter-vendor">
    <div class="aside-title">
        <h2 class="title-head margin-top-0">
            <span>Thương hiệu</span>
        </h2>
    </div>
    <div class="aside-content filter-group">
        <ul style="list-style: none; padding: 0;">
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-vendor-khac">
                        <input type="checkbox" id="filter-vendor-khac" data-group="PRODUCT_VENDOR" data-field="vendor"
                            data-text="" value="product contains Khác" data-operator="||" />
                        <i class="fa"></i>
                        Khác
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-vendor-ega-green">
                        <input type="checkbox" id="filter-vendor-ega-green" data-group="PRODUCT_VENDOR"
                            data-field="vendor" data-text="" value="product contains EGA GREEN" data-operator="||" />
                        <i class="fa"></i>
                        EGA GREEN
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-vendor-ega">
                        <input type="checkbox" id="filter-vendor-ega" data-group="PRODUCT_VENDOR" data-field="vendor"
                            data-text="" value="product contains EGA" data-operator="||" />
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
        <ul style="list-style: none; padding: 0;">
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-duoi-100-000d">
                        <input type="checkbox" id="filter-duoi-100-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="Dưới 100.000đ" value="(price:product <100000)"
                            data-operator="||" />
                        <i class="fa"></i>
                        Giá dưới 100.000đ
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-100-000d-200-000d">
                        <input type="checkbox" id="filter-100-000d-200-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="100.000đ - 200.000đ"
                            value="(price:product >=100000) && (price:product<=200000)" data-operator="||" />
                        <i class="fa"></i>
                        100.000đ - 200.000đ
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-200-000d-300-000d">
                        <input type="checkbox" id="filter-200-000d-300-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="200.000đ - 300.000đ"
                            value="(price:product >=200000) && (price:product<=300000)" data-operator="||" />
                        <i class="fa"></i>
                        200.000đ - 300.000đ
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-300-000d-500-000d">
                        <input type="checkbox" id="filter-300-000d-500-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="300.000đ - 500.000đ"
                            value="(price:product >=300000) && (price:product<=500000)" data-operator="||" />
                        <i class="fa"></i>
                        300.000đ - 500.000đ
                    </label>
                </span>
            </li>

            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-500-000d-1-000-000d">
                        <input type="checkbox" id="filter-500-000d-1-000-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="500.000đ - 1.000.000đ"
                            value="(price:product >=500000 )&& (price:product <=1000000)" data-operator="||" />
                        <i class="fa"></i>
                        500.000đ - 1.000.000đ
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-tren1-000-000d">
                        <input type="checkbox" id="filter-tren1-000-000d" onchange="" data-group="Khoảng giá"
                            data-field="price" data-text="Trên 1.000.000đ" value="(price:product >=1000000)"
                            data-operator="||" />
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
        <ul style="list-style: none; padding: 0;">
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-type-khac">
                        <input type="checkbox" id="filter-type-khac" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Khác"
                            data-operator="||" />
                        <i class="fa"></i>
                        Khác
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-type-thuc-pham">
                        <input type="checkbox" id="filter-type-thuc-pham" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Thực phẩm"
                            data-operator="||" />
                        <i class="fa"></i>
                        Thực phẩm
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-type-thuc-pham-tuoi-song">
                        <input type="checkbox" id="filter-type-thuc-pham-tuoi-song" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Thực phẩm tươi sống"
                            data-operator="||" />
                        <i class="fa"></i>
                        Thực phẩm tươi sống
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-type-nhap-khau">
                        <input type="checkbox" id="filter-type-nhap-khau" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Nhập khẩu"
                            data-operator="||" />
                        <i class="fa"></i>
                        Nhập khẩu
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label class="custom-checkbox" for="filter-type-nong-san-viet">
                        <input type="checkbox" id="filter-type-nong-san-viet" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Nông sản Việt"
                            data-operator="||" />
                        <i class="fa"></i>
                        Nông sản Việt
                    </label>
                </span>
            </li>
            <li class="filter-item filter-item--check-box filter-item--green overflow-item">
                <span>
                    <label class="custom-checkbox" for="filter-type-nhiet-doi">
                        <input type="checkbox" id="filter-type-nhiet-doi" data-group="PRODUCT_TYPE"
                            data-field="product_type" data-text="" value="product contains Nhiệt đới"
                            data-operator="||" />
                        <i class="fa"></i>
                        Nhiệt đới
                    </label>
                </span>
            </li>
        </ul>
    </div>
</aside>
<!-- End Lọc Loại -->
