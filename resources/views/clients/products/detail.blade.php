@extends('clients.layouts.detail')

@section('title', 'Chi tiết sản phẩm')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>&raquo;</span>
                    </li>
                    <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('category',['id'=>$cate]) }}">{{$product->hasCate->name}}</a><span>&raquo;</span></li>
                    <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('list') }}">{{$product->title}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="large-image">
                            <a href="{{ asset("storage/$product->image_url") }}" class="cloud-zoom" id="zoom1"
                                rel="useWrapper: false, adjustY:0, adjustX:20"> 
                                <img width="500px" height="400px" class="zoom-img" src="{{  asset("storage/$product->image_url") }}" alt="products"> 
                            </a>
                        </div>
                        <div class="flexslider flexslider-thumb">
                            <ul class="previews-list slides">
                                {{-- <li>
                                    <a href='' class='cloud-zoom-gallery'
                                        rel="useZoom: 'zoom1', smallImage: '{{asset('assets/admin/images/jr-sport.jpg')}}' ">
                                        <img src="{{asset('assets/admin/images/jr-sport.jpg')}}" alt="" /></a>
                                </li> --}}
                                @foreach ($gallery as $item)
                                        <li>
                                            <a href="{{ asset("storage/$item->filename") }}" class="cloud-zoom-gallery"
                                                rel="useZoom: 'zoom1', smallImage: '{{ asset("storage/$item->filename") }}' ">
                                                <img src="{{ asset("storage/$item->filename") }}" alt="Thumbnail 2" />
                                            </a>
                                        </li>
                                 @endforeach
                            </ul>
                        </div>

                        <!-- end: more-images -->

                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <div class="product-name">
                            <h1>{{ $product->title }}</h1>
                        </div>
                        <div class="short-description">
                            <h2>Mô tả</h2>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="price-box">
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price" id="price-pro">
                                    {{ number_format($product->price) . 'Đ' }}
                                </span>
                                <input type="hidden" id="price-small" value=" {{ number_format($product->price) . 'Đ' }}">
                            </p>
                        </div>
                        <div class="ratings">
                            <p class="availability in-stock pull-left">Tình trạng:
                                @if ($product->is_active == 0)
                                <span>Còn Hàng</span>
                                @else
                                    <span>Hết Hàng</span>
                                @endif
                            </p>
                        </div>


                        <div class="product-variation">

                            <form action="{{ route('save-cart', ['id' => $product->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}" id="{{ $product->id }}">
                                <div class="product-color-size-area">
                                    <div class="size-area">
                                        <h2 class="saider-bar-title">Size</h2>
                                        <div class="size">
                                            <ul>
                                                @foreach ($product->size as $item)
                                                    <li>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                            <input type="checkbox" id="{{ $item->id }}}"
                                                                name="size" value="{{ $item->name }}"
                                                                >
                                                            {{ $item->name }}
                                                            <span></span>
                                                        </label>
                                                    </li>
                                                @endforeach
                                               
                                            </ul>
                                        </div>
                                     
                                    </div>
                                </div>
                                @error('size')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="cart-plus-minus">
                                    <label for="qty">Số lượng:</label>
                                    <div class="numbers-row">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                            class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                        <input type="number" class="qty" title="Qty" value="1" maxlength="12"
                                            id="qty" min="1" max="10" name="quantity">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                            class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                    </div>
                                </div>
                                <button class="button pro-add-to-cart" title="Add to Cart" type="submit"><span><i
                                            class="fa fa-shopping-basket"></i> Thêm giỏ hàng</span></button>
                            </form>

                        </div>

                        {{-- <div class="pro-tags">
                        <div class="pro-tags-title">Tags:</div>
                        <a href="#">ecommerce</a>, <a href="#">bootstrap</a>, <a href="#">shopping</a>, <a href="#">fashion</a>, <a href="#">responsive</a> </div>
                    <div class="share-box">
                        <div class="title">Share in social media</div>
                        <div class="socials-box"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>                                <a href="#"><i class="fa fa-instagram"></i></a> </div>
                    </div> --}}
                    </div>
                </div>
            </div>
            <div class="product-overview-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="product-tab-inner">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#description" data-toggle="tab"> Mô tả chi tiết
                                        </a> </li>

                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <div class="std">
                                            <p>{{ $product->description }} </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="related-product-area">
                    <div class="page-header">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                    <div class="related-products-pro">
                        <div class="slider-items-products">
                            <div id="related-product-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 fadeInUp">
                                    @foreach ($product_related as $pro)
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="pr-img-area">
                                                        <a title="Product title here" href="{{route('detail',['id'=>$pro->id])}}">
                                                            <figure> <img class="first-img"
                                                                    src="{{ asset("storage/$pro->image_url") }}"
                                                                    alt="HTML template">
                                                                <img class="hover-img"
                                                                    src="{{ asset("storage/$pro->image_url") }}"
                                                                    alt="HTML template">
                                                            </figure>
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="{{route('detail',['id'=>$pro->id])}}"
                                                                href="single_product.html">{{ $pro->title }} </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> 
                                                                <i class="fa fa-star-o"></i> 
                                                                <i class="fa fa-star-o"></i> 
                                                                <i class="fa fa-star-o"></i> 
                                                                <i class="fa fa-star-o"></i> 
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                     <span class="regular-price">
                                                                        <span
                                                                            class="price">{{ number_format($pro->price) . 'Đ' }}
                                                                        </span>
                                                                          
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart"><span> Thêm giỏ
                                                                        hàng</span> </button>
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
@endsection

@section('script')

    <script type="text/javascript" src="{{ asset('assets/client/js/cloud-zoom.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/client/js/jquery.magnifying-zoom.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/client/js/jquery.flexslider.js') }}"></script>
    <!-- Slider Js -->
    <!-- Cho input số lượng nhận sự kiện change khi số lượng thay đổi thì tiền cũng thay đổi -->
    <script type="text/javascript">
        $(".product-variation").on("change", "input#qty", function() {
            var pricesmall = $('#price-small').val();
            var quantity = $('#qty').val();
            var tong =  quantity * parseInt(pricesmall);
            // // console.log(pricesmall);
            $('#price-pro').html((tong).toLocaleString("en-GB") + ',' + '000' + 'Đ');
        })
    </script>
@endsection
