@extends('frontend.components.index')

@section('content')

@include('frontend.home.sidebar')


<main id="main" class="">
  <div class="row category-page-row">
    <div class="col large-12">
      <div class="shop-container">
        {{-- product list --}}
        {{-- <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2" > --}}
          {{-- @if ($product->isEmpty()) --}}
            {{-- no product --}}
            {{-- <h2 class="d-flex justify-content-center align-items-center mt-5 mb-5" style="color:#777; text-align:center;">Chưa có sản phẩm</h2> --}}
            {{-- end no --}}
          {{-- @else
            @foreach ($product as $item)
              <div class="product-small col has-hover  has-post-thumbnail first instock sale shipping-taxable purchasable product-type-simple" >
                  @include('frontend.component.product_item')
              </div>
            @endforeach
          @endif
        </div> --}}

      </div>
    </div>
  </div>
  
  @include('frontend.components.breadcrumb', ['name'=>'Tất cả sản phẩm'])
  @include('frontend.product.products_list')
  
</main>

@endsection
