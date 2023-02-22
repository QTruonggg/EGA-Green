{{-- <div class="col large-7 pb-0 ">
    <form action="" method="post" class="woocommerce-cart-form">
        <div class="cart-wrapper sm-touch-scroll">
            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name" colspan="3">Sản phẩm</th>
                        <th class="product-price">Giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="product-subtotal">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productCart as $item)
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td class="product-remove">
                                <a href="{{route('deleteCart', $item->rowId)}}" class="remove" aria-label="Xóa sản phẩm " data-product_id="1394" data-product_sku="">×</a>          
                            </td> --}}
{{-- <td class="product-thumbnail">
                                <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">
                                    <img width="180" height="180" src="{{$item->options->thumbnail}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""  sizes="(max-width: 180px) 100vw, 180px">
                                </a>          
                            </td> --}}
{{-- <td class="product-name" data-title="Sản phẩm">
                                <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">{{$item->name}}</a>          
                            </td> --}}
{{-- <td class="product-price" data-title="Giá">
                                <span style="color: red;">Liên hệ</span>          
                            </td>
                            <td class="product-quantity" data-title="Số lượng">
                                <div class="quantity buttons_added">
                                    {{$item->qty}}
                                </div>
                            </td>
                            <td class="product-subtotal" data-title="Tổng tiền">
                                <span class="woocommerce-Price-amount amount">{{number_format($item->price * $item->qty)}}
                                    <span class="woocommerce-Price-currencySymbol">₫</span>
                                </span>            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div> --}}


<section class="section main-cart-page main-container col1-layout">
    <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
        <div class="cart-mobile container card border-0 py-md-4 px-md-4">
            <form action="/cart" method="post" novalidate="" class="margin-bottom-0">
                <div class="header-cart">
                    <div class="title-cart title_cart_mobile heading-bar">
                        <h1>Giỏ hàng</h1>
                    </div>
                </div>
                <div class="header-cart-content pl-md-0">
                </div>
            </form>


            <div class="row">
                <div class="col-9">
                    <div class="form">
                        <div class="table-responsive">
                                    @if (Cart::count() != 0)
                                        @foreach ($productCart as $productCart)
                                            {{-- <tr>
                                                <td class="tt">
                                                    <div class="images">
                                                        <a href="">
                                                            <img src="{{ $productCart->options->images }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="item-details">
                                                        <div class="item-name">
                                                            <a href="#">{{ $productCart->name }}</a>
                                                        </div>
                                                        <div class="item-code">
                                                            <span> Mã sản phẩm: {{ $productCart->options->code }}</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="input">
                                                    <div class="item-box">
                                                        <div class="item-option">
                                                            <input type="text" value="{{ $productCart->qty }}">
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="price-wrap">
                                                    <div class="item-price">
                                                        <span class="price">{{ $productCart->price }} ₫</span>
                                                    </div>
                                                </td>
                                                <td class="total-wrap">
                                                    <div class="total">
                                                        <span>{{ $productCart->price * $productCart->qty }} đ</span>
                                                    </div>
                                                </td>
                                                <td class="clear">
                                                    <div class="delete">
                                                        <a href="{{ route('deleteCart', $productCart->rowId) }}">
                                                            <span>Xoá</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr> --}}

                                            <div class="item-product item ">
                                                <div class="delete">
                                                    <a class="remove-itemx remove-item-cart" href="{{ route('deleteCart', $productCart->rowId) }}">
                                                        <span>Xoá</span>
                                                    </a>
                                                </div>
                                                <div class="item-product-cart-mobile">
                                                    <a href="/products/thanh-long"
                                                        class="product-images1  pos-relative embed-responsive embed-responsive-1by1" title="{{$productCart->name}}">
                                                        <img class="img-fluid"
                                                            src="{{$productCart->options->images}}"
                                                            alt="{{$productCart->name}}">
                                                    </a>
                                                </div>
                                                <div class="product-cart-infor">
                                                    <div class="title-product-cart-mobile">
                                                        <h3 class="product-name"> <a class="text2line" href="/products/thanh-long" title="{{$productCart->name}}">
                                                            {{ $productCart->name }}</a> </h3>
                                                        <span class="variant-title"></span>
                                                    </div>
                                    
                                                    <div class="cart-price">
                                                        <span class="product-price price">{{ $productCart->price }} ₫</span>
                                                    </div>
                                                    <div class="select-item-qty-mobile">
                                                        <div class="txt_center">
                                                            <input class="variantID" type="hidden" name="id" value="1068141278">
                                                            {{-- <button
                                                                onclick="var result = document.getElementById('qtyMobile1068141278'); var qtyMobile1068141278 = result.value; if( !isNaN( qtyMobile1068141278 ) &amp;&amp; qtyMobile1068141278 > 1 ) result.value--;return false;"
                                                                class="reduced items-count btn-minus btn" type="button"><i
                                                                    class="fa fa-minus"></i></button> --}}
                                                            <input type="text" maxlength="3" readonly="" min="1"
                                                                class="form-control input-text number-sidebar qtyMobile1068141278"
                                                                id="qtyMobile1068141278" name="updates[]" size="4" value="{{ $productCart->qty }}"
                                                                data-inventory="">
                                                            {{-- <button
                                                                onclick="var result = document.getElementById('qtyMobile1068141278'); var qtyMobile1068141278 = result.value; if( !isNaN( qtyMobile1068141278 )) result.value++;return false;"
                                                                class="increase items-count btn-plus btn" type="button"><i
                                                                    class="fa fa-plus"></i></button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        @endforeach
                                        <div class="cart-note">
                                            <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                            <textarea id="note" name="note" rows="8"></textarea>
                                        </div>
                                    @else
                                        <h2
                                            style="text-align:center; padding: 60px 10px 110px; color:#999; font-weight:600;">
                                            Giỏ hàng trống</h2>
                                    @endif
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    {{-- <div class="total-product">
                        <div class="wrap">
                            <div class="provisional">
                                <span class="pr">Tạm tính:</span>
                                <span class="price-provisional">{{ Cart::subtotal() }} ₫</span>
                            </div>
                        </div>
                    </div> --}}


                    <div class="header-cart-price pl-md-4 pr-md-0">
                        <div class="timedeli">
                            <div class="ega-delivery__wrapper left">
                                <p class="ega-delivery__title">HẸN GIỜ NHẬN HÀNG</p>
                            </div>
                        </div>
                
                
                
                        <div class="r-bill">
                            <div class="checkbox">
                                <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value="không">
                                <input type="checkbox" id="checkbox-bill" value="có" class="regular-checkbox">
                                <label for="checkbox-bill" class="box"></label>
                                <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
                            </div>
                            <div class="bill-field">
                                <div class="form-group">
                                    <label>Tên công ty</label>
                                    <input type="text" class="form-control val-f" name="attributes[company_name]" value=""
                                        placeholder="Tên công ty">
                                </div>
                                <div class="form-group">
                                    <label>Mã số thuế</label>
                                    <input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)"
                                        onpaste="handlePaste(event)" class="form-control val-f val-n" name="attributes[tax_code]"
                                        value="" placeholder="Mã số thuế">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ công ty</label>
                                    <textarea type="text" class="form-control val-f" rows="5" name="attributes[company_address]"
                                        value="" placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Email nhận hoá đơn</label>
                                    <input type="email" class="form-control val-f val-email" name="attributes[invoice_email]"
                                        value="" placeholder="Email nhận hoá đơn">
                                </div>
                            </div>
                        </div>
                
                
                        <div class="title-cart">
                            <h3 class="text-xs-left">Tổng tiền</h3>
                            <span class="price-provisional">{{ Cart::subtotal() }} ₫</span>
                            <span class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)<span> </span></span>
                        </div>
                
                        <div class="cart-limit-alert" style="display: none;">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu
                            100.000 đ
                
                            Vui lòng chọn mua thêm sản phẩm
                        </div>
                
                        <div class="checkout">
                            <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button"
                                onclick="goToCheckout(event)">
                                <span>Tiến hành thanh toán</span></button>
                
                        </div>
                        <button class="btn btn-block btn-buymore" title="Tiếp tục mua hàng" type="button"
                            onclick="window.location.href='/sanpham'">
                            <i class="fa fa-arrow-left "> </i> <span> Tiếp tục mua hàng</span>
                        </button>
                    </div>

                </div>
            </div>





            <div class="bottom-cart px-md-0">
                <div class="back-index">
                    <div class="gift-list">
                        <label class="h5"><i class="fas fa-gift mr-2"></i> Siêu Ưu Đãi</label>
                        <ul class="free-gifts">
                            <li class="mb-3  ">
                                <span class="align-items-baseline  ">
                                    <span class="mb-2">Nhập mã <b>EGAGREEN</b> để được giảm 5% sản phẩm thương hiệu
                                        EGA Green
                                        <button class="btn  p-1 mb-1 btn-sm js-copy" data-copy="EGAGREEN">
                                            Sao chép </button>
                                    </span>
                                </span>
                            </li>
                            <li class="mb-3  ">
                                <span class="align-items-baseline  ">
                                    <span class="mb-2">Nhập mã <b>EGANY</b> để được giảm 15% tổng giá trị đơn hàng. Số
                                        lượng có hạn
                                        <button class="btn  p-1 mb-1 btn-sm js-copy" data-copy="EGANY">
                                            Sao chép </button>
                                    </span>
                                </span>
                            </li>
                            <li class="mb-3  ">
                                <span class="align-items-baseline  ">
                                    <span class="mb-2">Nhập mã <b>TET2021</b> để được giảm 5% sản phẩm thương hiệu EGA
                                        Green
                                        <button class="btn  p-1 mb-1 btn-sm js-copy" data-copy="TET2021">
                                            Sao chép </button>
                                    </span>
                                </span>
                            </li>
                            <li class="mb-3  ">
                                <span class="align-items-baseline  ">
                                    <span class="mb-2">Nhập mã <b>VUITET</b> để được giảm 5% sản phẩm thương hiệu EGA
                                        Green
                                        <button class="btn  p-1 mb-1 btn-sm js-copy" data-copy="VUITET">
                                            Sao chép </button>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="header-cart-content pl-md-0">

    <div class="header-cart-price pl-md-4 pr-md-0">
        <div class="timedeli">
            <div class="ega-delivery__wrapper left">
                <p class="ega-delivery__title">HẸN GIỜ NHẬN HÀNG</p>
                <div class="ega-delivery ega-form__group"
                    style="--input-background: #e6e6e6; --input-color: #000000; --input-border:#d1d1d2; --datepicker-square: #dcdcdc ;">
                    <label style="position: relative;">Ngày nhận hàng<input id="datepicker"
                            class="ega-delivery__date ega-form__control" readonly="" type="text">
                        <div class="qs-datepicker-container qs-hidden">
                            <div class="qs-datepicker">
                                <div class="qs-controls">
                                    <div class="qs-arrow qs-left"></div>
                                    <div class="qs-month-year"><span class="qs-month">Tháng 2</span><span
                                            class="qs-year">2023</span></div>
                                    <div class="qs-arrow qs-right"></div>
                                </div>
                                <div class="qs-squares">
                                    <div class="qs-square qs-day">CN</div>
                                    <div class="qs-square qs-day">T2</div>
                                    <div class="qs-square qs-day">T3</div>
                                    <div class="qs-square qs-day">T4</div>
                                    <div class="qs-square qs-day">T5</div>
                                    <div class="qs-square qs-day">T6</div>
                                    <div class="qs-square qs-day">T7</div>
                                    <div class="qs-square CN qs-outside-current-month qs-empty" data-direction="-1">
                                    </div>
                                    <div class="qs-square T2 qs-outside-current-month qs-empty" data-direction="-1">
                                    </div>
                                    <div class="qs-square T3 qs-outside-current-month qs-empty" data-direction="-1">
                                    </div>
                                    <div class="qs-square T4 qs-num qs-disabled" data-direction="0">1</div>
                                    <div class="qs-square T5 qs-num qs-disabled" data-direction="0">2</div>
                                    <div class="qs-square T6 qs-num qs-disabled" data-direction="0">3</div>
                                    <div class="qs-square T7 qs-num qs-disabled" data-direction="0">4</div>
                                    <div class="qs-square CN qs-num qs-disabled" data-direction="0">5</div>
                                    <div class="qs-square T2 qs-num qs-disabled" data-direction="0">6</div>
                                    <div class="qs-square T3 qs-num qs-disabled" data-direction="0">7</div>
                                    <div class="qs-square T4 qs-num qs-disabled" data-direction="0">8</div>
                                    <div class="qs-square T5 qs-num qs-disabled" data-direction="0">9</div>
                                    <div class="qs-square T6 qs-num qs-disabled" data-direction="0">10</div>
                                    <div class="qs-square T7 qs-num qs-disabled" data-direction="0">11</div>
                                    <div class="qs-square CN qs-num qs-disabled" data-direction="0">12</div>
                                    <div class="qs-square T2 qs-num qs-disabled" data-direction="0">13</div>
                                    <div class="qs-square T3 qs-num qs-disabled" data-direction="0">14</div>
                                    <div class="qs-square T4 qs-num qs-disabled" data-direction="0">15</div>
                                    <div class="qs-square T5 qs-num qs-disabled" data-direction="0">16</div>
                                    <div class="qs-square T6 qs-num qs-disabled" data-direction="0">17</div>
                                    <div class="qs-square T7 qs-num qs-disabled" data-direction="0">18</div>
                                    <div class="qs-square CN qs-num qs-disabled" data-direction="0">19</div>
                                    <div class="qs-square T2 qs-num qs-disabled" data-direction="0">20</div>
                                    <div class="qs-square T3 qs-num qs-disabled" data-direction="0">21</div>
                                    <div class="qs-square T4 qs-num qs-active qs-current" data-direction="0">22</div>
                                    <div class="qs-square T5 qs-num" data-direction="0">23</div>
                                    <div class="qs-square T6 qs-num" data-direction="0">24</div>
                                    <div class="qs-square T7 qs-num" data-direction="0">25</div>
                                    <div class="qs-square CN qs-num" data-direction="0">26</div>
                                    <div class="qs-square T2 qs-num" data-direction="0">27</div>
                                    <div class="qs-square T3 qs-num" data-direction="0">28</div>
                                    <div class="qs-square T4 qs-outside-current-month qs-empty" data-direction="1">
                                    </div>
                                    <div class="qs-square T5 qs-outside-current-month qs-empty" data-direction="1">
                                    </div>
                                    <div class="qs-square T6 qs-outside-current-month qs-empty" data-direction="1">
                                    </div>
                                    <div class="qs-square T7 qs-outside-current-month qs-empty" data-direction="1">
                                    </div>
                                </div>
                                <div class="qs-overlay qs-hidden">
                                    <div><input class="qs-overlay-year" placeholder="4-digit year">
                                        <div class="qs-close">✕</div>
                                    </div>
                                    <div class="qs-overlay-month-container">
                                        <div class="qs-overlay-month" data-month-num="0">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="1">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="2">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="3">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="4">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="5">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="6">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="7">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="8">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="9">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="10">Thá</div>
                                        <div class="qs-overlay-month" data-month-num="11">Thá</div>
                                    </div>
                                    <div class="qs-submit qs-disabled">Submit</div>
                                </div>
                            </div>
                        </div>
                    </label><label>Thời gian nhận hàng<select class="ega-delivery__time ega-form__control"
                            style="--input-background: #e6e6e6; --input-color: #000000; --input-border:#d1d1d2; --datepicker-square: #dcdcdc ;">
                            <option value="">Càng sớm càng tốt</option>
                            <option value="Sáng: 08h00 - 12h00">Sáng: 08h00 - 12h00</option>
                            <option value="Chiều: 14h00 - 18h00">Chiều: 14h00 - 18h00</option>
                            <option value="Tối: 19h00 - 21h00">Tối: 19h00 - 21h00</option>
                        </select></label></div>
                <div class="ega-delivery__note"></div>
            </div>
        </div>



        <div class="r-bill">
            <div class="checkbox">
                <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value="không">
                <input type="checkbox" id="checkbox-bill" value="có" class="regular-checkbox">
                <label for="checkbox-bill" class="box"></label>
                <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
            </div>
            <div class="bill-field">
                <div class="form-group">
                    <label>Tên công ty</label>
                    <input type="text" class="form-control val-f" name="attributes[company_name]" value=""
                        placeholder="Tên công ty">
                </div>
                <div class="form-group">
                    <label>Mã số thuế</label>
                    <input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)"
                        onpaste="handlePaste(event)" class="form-control val-f val-n" name="attributes[tax_code]"
                        value="" placeholder="Mã số thuế">
                </div>
                <div class="form-group">
                    <label>Địa chỉ công ty</label>
                    <textarea type="text" class="form-control val-f" rows="5" name="attributes[company_address]"
                        value="" placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                </div>
                <div class="form-group">
                    <label>Email nhận hoá đơn</label>
                    <input type="email" class="form-control val-f val-email" name="attributes[invoice_email]"
                        value="" placeholder="Email nhận hoá đơn">
                </div>
            </div>
        </div>


        <div class="title-cart">
            <h3 class="text-xs-left">Tổng tiền</h3>
            <span class="text-xs-right  totals_price_mobile">3,479,500₫</span>
            <span class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)<span> </span></span>
        </div>

        <div class="cart-limit-alert" style="display: none;">
            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu
            100.000 đ

            Vui lòng chọn mua thêm sản phẩm
        </div>

        <div class="checkout">
            <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button"
                onclick="goToCheckout(event)">
                <span>Tiến hành thanh toán</span></button>

        </div>
        <button class="btn btn-block btn-buymore" title="Tiếp tục mua hàng" type="button"
            onclick="window.location.href='/collections/all'">
            <i class="fa fa-arrow-left "> </i> <span> Tiếp tục mua hàng</span>
        </button>
    </div>
</div>


@section('scripts')
    <script>
        window.egaDeliveryValid = true;
        window.EGADeliverySettings = {
            "general": {
                "enabled": true,
                "title": "HẸN GIỜ NHẬN HÀNG",
                "optionDefault": "Càng sớm càng tốt",
                "inputBackground": "#e6e6e6",
                "inputColor": "#000000",
                "startTime": "09:30",
                "endTime": "21:00",
                "waitTime": 120,
                "orderTime": 30,
                "orderTimeUnit": "1",
                "query": ".timedeli",
                "position": "left",
                "inputBorder": "#d1d1d2",
                "datepickerBg": "#dcdcdc",
                "labelDatePicker": "Ngày nhận hàng",
                "labelTimePicker": "Thời gian nhận hàng"
            },
            "advanced": {
                "enableTimeSlots": true,


                "timeSlots": [


                    {
                        "title": "Sáng: 08h00 - 12h00"
                    }

                    , {
                        "title": " Chiều: 14h00 - 18h00"
                    }

                    , {
                        "title": " Tối: 19h00 - 21h00"
                    }


                ],
                "availableDay": [{
                        "name": "1"
                    },
                    {
                        "name": "2"
                    },
                    {
                        "name": "3"
                    },
                    {
                        "name": "4"
                    },
                    {
                        "name": "5"
                    },
                    {
                        "name": "6"
                    },
                    {
                        "name": "0"
                    }
                ],
            }
        }

        window.EGADeliverySettings.general = Object.assign(window.EGADeliverySettings.general, {
            currentTemplate: "cart",
            platform: Haravan
        })
    </script>

<script>

	$(document).ready(() => {
		const page_id = "168389884826236"
		if(page_id && window.innerWidth  > 600){
		$(window).one(' mousemove touchstart scroll', () => {
			var chatbox = document.getElementById('fb-customer-chat');
			chatbox.setAttribute("page_id", page_id);
								 chatbox.setAttribute("attribution", "biz_inbox");

			window.fbAsyncInit = function() {
				FB.init({
					xfbml            : true,
					version          : 'v12.0'
				});
			};

			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		})
		}
	})

</script>
@endsection
