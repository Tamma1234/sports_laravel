@extends('clients.layouts.detail')

@section('title', 'Danh mục')
<!-- Slidedetail  -->

@section('content')

<!-- service section -->

<div class="breadcrumbs">
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <ul>
                  <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>&raquo;</span>
                  </li>
                  <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('category',['id'=>$cate->id]) }}">{{$cate->name}}</a><span>&raquo;</span></li>
              </ul>
          </div>
      </div>
  </div>
</div>
<!-- All products-->
<div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-Template"> 
                  <div class="item"> 
                      <a href="#x"><img alt="HTML template" src="{{asset('assets/admin/images/banner-1.jpg')}}"></a>
                  </div>
                  <div class="item"> 
                      <a href="#x"><img alt="HTML template" src="{{asset('assets/admin/images/banner-2.jpg')}}"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="shop-inner">
            <div class="page-title">
              <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="short-by">
                  <label>Lọc sản phẩm theo</label>
                  <select id="short-by">
                    <option selected="selected">--Lọc theo--</option>
                    <option {{ $short_by == 'tang_dan' ? 'selected' : '' }}  value="{{ Request::url() }}?short_by=tang_dan">
                        --Theo giá tăng dần--
                    </option>
                    <option {{ $short_by == 'giam_dan' ? 'selected' : '' }} value="{{ Request::url() }}?short_by=giam_dan">
                        --Theo giá giảm dần--
                    </option>
                    <option {{ $short_by == 'kytu-az' ? 'selected' : '' }} value="{{ Request::url() }}?short_by=kytu-az">
                        Theo tên từ a-z
                    </option>
                    <option {{ $short_by == 'kytu-za' ? 'selected' : '' }} value="{{ Request::url() }}?short_by=kytu-za">
                        Theo tên từ z-a
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                  @foreach ($product_by_id as $item)
                  <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="{{route('detail',['id'=>$item->id])}}">
                            <figure> <img class="first-img" src="{{asset("storage/$item->image_url")}}" alt="HTML template"> <img class="hover-img" src="{{asset("storage/$item->image_url")}}" alt="HTML template"></figure>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="{{route('detail',['id'=>$item->id])}}">{{$item->title}} </a> </div>
                            <div class="item-content">
                            
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">{{number_format($item->price) .'Đ'}} </span> </span> </div>
                              </div>
                              <div class="pro-action">
                                <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
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
        <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <div class="block shop-by-side">
            <div class="sidebar-bar-title">
              <h3>Shop By</h3>
            </div>
            <div class="block-content">            
              <div class="manufacturer-area">
                <h2 class="saider-bar-title">Danh mục</h2>
                <div class="saide-bar-menu">
                  <ul>
                    @foreach ($category as $item)
                    <li><a href="{{ route('category', ['id' => $item->id]) }}"><i class="fa fa-angle-right"></i> {{$item->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="size-area">
                <h2 class="saider-bar-title">Size</h2>
                <div class="size">
                  <ul>
                    @foreach ($size as $item)
                    <li><a href="{{ route('size', ['id' => $item->id]) }}">{{$item->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="offer-banner"><img src="{{asset('assets/client/images/nike-phantom.jpg')}}" alt="banner"></div>
        </aside>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 

<!-- Blog -->


<!-- our clients Slider -->

<!-- BANNER-AREA-END -->


@endsection
