@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')
<!-- Slidedetail  -->
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span>
                        </li>
                        <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('list.product.hot') }}">Danh sách sản
                                phẩm</a><span>&raquo;</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <div class="inner-box" n style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <!-- Banner -->
                <div class="col-md-3 top-banner hidden-sm">
                    <div class="jtv-banner3">
                        <div class="jtv-banner3-inner">
                            <a href="#"><img src="{{ asset('assets/client/images/nike-phantom.jpg') }}"
                                    alt="HTML template"></a>

                        </div>
                    </div>
                </div>
                <!-- Best Sale -->
                <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Sản phẩm bán chạy</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="jtv-best-sale-slider" class="product-flexslider">
                                <div class="slider-items">
                                    @foreach ($product_list as $item)
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="pr-img-area">
                                                        <a title="Product title here"
                                                            href="{{ route('detail', ['id' => $item->id]) }}">
                                                            <figure> <img class="first-img"
                                                                    src="{{asset("storage/$item->image_url")}}" alt="HTML template"> <img
                                                                    class="hover-img" src="{{asset("storage/$item->image_url")}}"
                                                                    alt="HTML template"></figure>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here"
                                                                href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->title }}}</a>
                                                        </div>
                                                        <div class="item-content">

                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span
                                                                            class="price">{{ number_format($item->price) . 'Đ' }}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" id="{{ $item->id }}"
                                                                    data-toggle="modal"
                                                                    data-target="#product-{{ $item->id }}"
                                                                    class="add-to-cart"><span> Thêm giỏ hàng</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container col1-layout" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="well">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="row">
                                    <div class="col-main col-sm-12 col-xs-12">
                                        <div class="shop-inner">
                                            <div class="page-title" style="display: flex">
                                                <h2 style="margin-right: 20px"><a href="{{ route('home') }}">Hàng Mới
                                                        Về</a>
                                                </h2>
                                            </div>
                                            <div class="product-grid-area">
                                                <div class="row">
                                                    <ul class="products-grid">
                                                        @foreach ($product as $item)
                                                            <li class="col-md-3" style="margin-right: 0px">
                                                                <div class="product-item">
                                                                    <div class="item-inner">
                                                                        <div class="product-thumbnail">
                                                                            <div class="pr-img-area"> <a
                                                                                    title="Ipsums Dolors Untra"
                                                                                    href="{{ route('detail', ['id' => $item->id]) }}">
                                                                                    <figure> <img class="first-img"
                                                                                            src="{{asset("storage/$item->image_url")}}"
                                                                                            alt="HTML template">
                                                                                        <img class="hover-img"
                                                                                            src="{{asset("storage/$item->image_url")}}"
                                                                                            alt="HTML template">
                                                                                    </figure>
                                                                                </a> </div>
                                                                        </div>
                                                                        <div class="item-info">
                                                                            <div class="info-inner">
                                                                                <div class="item-title"> <a
                                                                                        title="Ipsums Dolors Untra"
                                                                                        href="single_product.html">{{ $item->title }}
                                                                                    </a> </div>
                                                                                <div class="item-content">

                                                                                    <div class="item-price">
                                                                                        <div class="price-box"> <span
                                                                                                class="regular-price">
                                                                                                <span
                                                                                                    class="price">{{ number_format($item->price) . 'Đ' }}</span>
                                                                                            </span> </div>
                                                                                    </div>

                                                                                    <div class="pro-action">
                                                                                        <button type="button"
                                                                                            id="{{ $item->id }}"
                                                                                            data-toggle="modal"
                                                                                            data-target="#product-{{ $item->id }}"
                                                                                            class="add-to-cart"><span>
                                                                                                Thêm
                                                                                                giỏ hàng</span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item active">
                                <div class="row">
                                    <div class="col-main col-sm-12 col-xs-12">
                                        <div class="shop-inner">
                                            <div class="page-title" style="display: flex">
                                                <h2 style="margin-right: 20px"><a href="{{ route('home') }}">Sản Phẩm Mới
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="product-grid-area">
                                                <div class="row">
                                                    <ul class="products-grid">
                                                        @foreach ($product_hot as $item)
                                                            <li class="col-md-3" style="margin-right: 0px">
                                                                <div class="product-item">
                                                                    <div class="item-inner">
                                                                        <div class="product-thumbnail">
                                                                            <div class="pr-img-area"> <a
                                                                                    title="Ipsums Dolors Untra"
                                                                                    href="{{ route('detail', ['id' => $item->id]) }}">
                                                                                    <figure> <img class="first-img"
                                                                                            src="{{asset("storage/$item->image_url")}}"
                                                                                            alt="HTML template">
                                                                                        <img class="hover-img"
                                                                                            src="{{asset("storage/$item->image_url")}}"
                                                                                            alt="HTML template">
                                                                                    </figure>
                                                                                </a> </div>
                                                                        </div>
                                                                        <div class="item-info">
                                                                            <div class="info-inner">
                                                                                <div class="item-title"> <a
                                                                                        title="Ipsums Dolors Untra"
                                                                                        href="single_product.html">{{ $item->title }}
                                                                                    </a> </div>
                                                                                <div class="item-content">

                                                                                    <div class="item-price">
                                                                                        <div class="price-box"> <span
                                                                                                class="regular-price">
                                                                                                <span
                                                                                                    class="price">{{ number_format($item->price) . 'Đ' }}</span>
                                                                                            </span> </div>
                                                                                    </div>

                                                                                    <div class="pro-action">
                                                                                        <button type="button"
                                                                                            id="{{ $item->id }}"
                                                                                            data-toggle="modal"
                                                                                            data-target="#product-{{ $item->id }}"
                                                                                            class="add-to-cart"><span>
                                                                                                Thêm
                                                                                                giỏ hàng</span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="prev"><i
                                class="fa fa-chevron-left fa-2x"></i></a> <a class="right carousel-control"
                            href="http://hocwebgiare.com/cpadmin/#myCarousel" data-slide="next"><i
                                class="fa fa-chevron-right fa-2x"></i></a>
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0"
                                class=""></li> 
                <li data-target=" #myCarousel" data-slide-to="1"
                                class="active"></li>

                        </ol>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            <!-- Main Container -->
        </div>
    </div>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-main col-sm-12 col-xs-12">
                <div class="shop-inner">
                    <div class="page-title">
                        <h2><a href="{{ route('list.product.hot') }}">Danh sách sản phẩm</a> </h2>
                    </div>

                    <div class="product-grid-area">
                        <ul class="products-grid">
                            @foreach ($product_list as $item)
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="{{ route('detail', ['id' => $item->id]) }}">
                                                        <figure> <img class="first-img"
                                                                src="{{asset("storage/$item->image_url")}}" alt="HTML template">
                                                            <img class="hover-img"
                                                                src="{{asset("storage/$item->image_url")}}" alt="HTML template">
                                                        </figure>
                                                    </a> </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">{{ $item->title }} </a> </div>
                                                    <div class="item-content">

                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price">
                                                                    <span
                                                                        class="price">{{ number_format($item->price) . 'Đ' }}</span>
                                                                </span> </div>
                                                        </div>

                                                        <div class="pro-action">
                                                            <button type="button" id="{{ $item->id }}"
                                                                data-toggle="modal"
                                                                data-target="#product-{{ $item->id }}"
                                                                class="add-to-cart"><span> Thêm giỏ hàng</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal fade" id="product-{{ $item->id }}"
                                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Modal title</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-lg-5">
                                                                                <img width=""
                                                                                    src="{{asset("storage/$item->image_url")}}" alt="">
                                                                            </div>
                                                                            <div class="col-md-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label for="title">Tiêu đề:</label>
                                                                                    <span>{{ $item->title }}</span>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="size-area">
                                                                                        <h2 class="saider-bar-title">Size
                                                                                        </h2>
                                                                                        <div class="size">
                                                                                            <ul style="display:contents">
                                                                                                @foreach ($item->size as $size)
                                                                                                    <li>
                                                                                                        <label
                                                                                                            class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                class="size"
                                                                                                                data-size="{{ $size->value }}"
                                                                                                                id="size-{{ $size->id }}"
                                                                                                                name="size"
                                                                                                                value="{{ $size->name }}"
                                                                                                                required="true">
                                                                                                            {{ $size->name }}
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </li>
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @error('size')
                                                                                    <div class="alert alert-danger">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                                <div class="cart-plus-minus">
                                                                                    <label for="qty">Số lượng:</label>
                                                                                    <div class="numbers-row">
                                                                                        <input type="number"
                                                                                            class="qty"
                                                                                            title="Qty" value="1"
                                                                                            maxlength="12"
                                                                                            id="qty-{{ $item->id }}"
                                                                                            min="1" max="10"
                                                                                            name="quantity">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <button type="button" disabled
                                                                            id="btn-{{ $item->id }}"
                                                                            onclick="addCart({{ $item->id }})"
                                                                            class="btn btn-danger"><span> Save cart</span>
                                                                        </button>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="pagination-area ">
                        <a href="{{ route('list.product.hot') }}" class="btn btn-danger">Xem thêm sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- our clients Slider -->
    <!-- Button trigger modal -->


    <!-- Modal -->

    <!-- BANNER-AREA-END -->

@endsection

@section('script')
    <!-- Messenger Plugin chat Code -->
<!-- Messenger Plugin chat Code -->

@endsection
