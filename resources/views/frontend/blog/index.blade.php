@extends('frontend.components.index')
@section('head')
@endsection

@section('content')
@include('frontend.home.sidebar')
@include('frontend.components.breadcrumb', ['name'=>'Tin tức'])
@include('frontend.blog.blog_list')

@endsection
