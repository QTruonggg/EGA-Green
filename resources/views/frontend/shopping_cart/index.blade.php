@extends('frontend.components.index')
@section('head')
<link href='//theme.hstatic.net/200000295082/1000772075/14/cartpage.scss.css?v=586' rel='stylesheet' type='text/css'  media='all'  />	
@endsection

@section('content')
@include('frontend.home.sidebar')
@include('frontend.components.breadcrumb', ['name'=>'Giỏ hàng'])

    {{-- <main id="main" class="">
        <div class="page-wrapper page-left-sidebar">
            <div class="row">
                <div id="content" class="large-9 right col" role="main">
                    <div class="page-inner">
                        <div class="woocommerce">
                            <div class="woocommerce row row-large row-divided"> --}}

                                {{-- no cart --}}

                                {{-- @if (Cart::count() == 0)
                                    <div id="content" class="large-7 right col" role="main">
                                        <div class="page-inner"> --}}
                                            {{-- <div class="woocommerce">
                                            <div class="text-center pt pb">
                                                <p class="cart-empty">Giỏ hàng của bạn đang trống</p>		
                                                <p class="return-to-shop">
                                                    <a class="button primary wc-backward" href="{{route('showHome')}}">
                                                        Quay về cửa hàng			
                                                    </a>
                                                </p>
                                            </div>
                                        </div> --}}
                                            {{-- <div class="title-cart">
                                                <h1>Giỏ hàng</h1>
                                                <p>
                                                    (Chưa có sản phẩm nào) nhấn vào
                                                    <a href="{{ route('showHome') }}" title="cửa hàng"
                                                        class="link text-primary">cửa hàng</a>
                                                    để mua hàng
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @else --}}
                                    {{-- cart product --}}
                                    {{-- @include('frontend.shopping_cart.cart_content') --}}
                                {{-- @endif --}}
                                {{-- <div class="cart-collaterals large-5 col pb-0">
                                    <div class="cart-sidebar col-inner ">
                                        <div class="cart_totals ">
                                            <table cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name" colspan="2" style="border-width:3px;">
                                                            Tổng giỏ hàng</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <h2>Tổng giỏ hàng</h2>
                                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Tạm tính</th>
                                                        <td data-title="Tạm tính">
                                                            <span
                                                                class="woocommerce-Price-amount amount">{{ Cart::subtotal() }}
                                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Tổng tiền</th>
                                                        <td data-title="Tổng tiền">
                                                            <strong>
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{ Cart::subtotal() }}
                                                                    <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href=""
                                                    class="checkout-button button alt wc-forward">
                                                    Tiến hành đặt hàng
                                                </a>
                                            </div>
                                        </div> --}}
                                        {{-- <form class="checkout_coupon mb-0" method="post">
                                        <div class="coupon">
                                            <h3 class="widget-title"><i class="icon-tag"></i> Mã ưu đãi</h3>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi"> 
                                            <input type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng mã ưu đãi">
                                        </div>
                                    </form> --}}
                                        {{-- <div class="cart-sidebar-content relative"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-footer-content after-cart-content relative"></div>
                        </div>
                    </div><!-- .page-inner -->
                </div><!-- end #content large-9 left -->
                <div class="large-3 col col-first col-divided">
                    <div id="secondary" class="widget-area " role="complementary"> --}}

                        {{-- @include('frontend.blog.hot_product')
                    @include('frontend.blog.blog_new') --}}


                    {{-- </div><!-- #secondary -->
                </div><!-- end sidebar -->
            </div><!-- end row -->
        </div><!-- end page-right-sidebar container -->
    </main> --}}
    <!-- #main -->


    @include('frontend.shopping_cart.cart_content')

@endsection



