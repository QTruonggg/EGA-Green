@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    @if(session()->has('success'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('success') }}
        </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },2000)
    </script>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-0">
                <form id="cerfitication" action="{{route('admin.addProduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Tên</label>
                                        <input type="text" id="name" name="name" value="" class="form-control" placeholder="Nhập tên">
                                         @error('name')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Mã sản phẩm</label>
                                        <input type="text" id="code" name="code" value="" class="form-control" placeholder="Nhập mã sản phẩm">
                                         @error('code')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="qty" class="form-label mb-1">Số lượng</label>
                                        <input type="text" id="qty" name="qty" value="" class="form-control" placeholder="Nhập số lượng">
                                         @error('qty')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="category_id" class="form-label mb-1">Danh mục</label>
                                        <select class="form-control custom-select" name="category_id" id="category_id" placeholder="">
                                            @foreach ($categorys_id as $item)
                                                <option value="{{$item->name}}" style="font-weight: bold; font-size: 1.1rem" disabled>{{$item->name}}</option>
                                                    @foreach($item->childs as $parent_category)
                                                    <option value="{{$parent_category->id}}">{{$parent_category->name}}</option>
                                                    @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="oldPrice" class="form-label mb-1">Giá gốc</label>
                                        <input type="number" id="oldPrice" name="oldPrice" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" value="" class="form-control" placeholder="Nhập giá gốc">
                                         @error('oldPrice')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="percent_discount" class="form-label mb-1">Giảm giá %</label>
                                        <input type="number" id="percent_discount" name="percent_discount"  oninput="this.value = this.value.replace(/[^0-9.]/g, '')" min="0" max="100" value="" class="form-control" placeholder="Nhập phần trăm giảm giá ">
                                        @error('percent_discount')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="salePrice" class="form-label mb-1">Giá hiện tại</label>
                                        <input type="text" id="salePrice" name="salePrice" value=""  oninput="this.value = this.value.replace(/[^0-9.]/g, '')" class="form-control" placeholder="Bạn cũng có thể nhập giá hiện tại tại đây!">
                                         @error('salePrice')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <select class="form-control custom-select" name="status" id="status">
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="description" class="form-label mb-1">Mô tả</label>
                                        <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                         @error('description')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-3"></div>
                                    <div class="">
                                        <h3 class="card-title">Thông tin tìm kiếm</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Seo keyword</label>
                                                <input type="text" id="seo_keyword" name="seo_keyword" value="" class="form-control">
                                                @if ($errors->has('seo_keyword'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_keyword') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_description" class="form-label mb-1">Seo description</label>
                                                <input type="text" id="seo_description" name="seo_description" value="" class="form-control">
                                                @if ($errors->has('seo_description'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_title" class="form-label mb-1">Seo title</label>
                                                <input type="text" id="seo_title" name="seo_title" value="" class="form-control">
                                                @if ($errors->has('seo_title'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="images"  value="">
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  ps-5 mb-2">
                            <a href="{{route('admin.showProductList')}}" class="btn btn-secondary">Quay lại</a>
                            <input type="submit" value="Thêm" class="btn btn-success float-right ms-2">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card card-app-design">
            <div class="card-body">
                <div id="imgList" 
                    style="
                        width: 230px;
                        height: 230px;
                        overflow: hidden;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0 auto;
                        margin-bottom: 20px;
                    ">
                    <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="images_prev" src="{{asset('empty/empty_img.png')}}"  alt="..">
                </div>
                <button class="btn btn-primary btn-toggle-sidebar w-100 waves-effect waves-float waves-light" id="popup-1-button">
                    <span class="align-middle">Chọn ảnh</span>
                </button>
                @if ($errors->has('images'))
                    <span class="text-danger d-block mt-1">{{ $errors->first('images') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

</section>
  <script>
    var button = document.getElementById( 'popup-1-button' );
    function selectFileWithCKFinder() {
        CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var img = document.getElementById('images_prev')
                    var images = file.getUrl();
                    $('input[name="images"]').val(`{{env('APP_URL')}}${images}`);
                    img.src = `{{env('APP_URL')}}${images}`;    
                } );
            }
        } );
    }
    button.onclick =() => {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    }
    $('input[name="percent_discount"]').change(function() {
        var value_oldPrice = parseInt($('input[name="oldPrice"]').val());
        var value_percent_discount =  parseInt($('input[name="percent_discount"]').val());
        value_salePrice = value_oldPrice * (100 - value_percent_discount) / 100;
        $('input[name="salePrice"]').val(value_salePrice)
    })
     $('input[name="salePrice"]').change(function() {
        var value_oldPrice = parseInt($('input[name="oldPrice"]').val());
        var value_salePrice =  parseInt($('input[name="salePrice"]').val());
        var value_percent_discount = value_salePrice * (100 / value_oldPrice);
        var result = parseFloat( Math.round(100 - value_percent_discount))
        $('input[name="percent_discount"]').val(result)
     })
</script>
<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection

@section('script')
<script src="{{asset('ckfinder/ckfinder.js')}}" ></script>
@endsection