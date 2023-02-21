@extends('frontend.components.index')

@section('content')

@include('frontend.home.sidebar')
@include('frontend.components.breadcrumb',['name'=>'Chi tiết sản phẩm - {{$product->name}}'])
@include('frontend.product_details.details')
@include('frontend.product_details.describe')


@endsection