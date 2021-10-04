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
                  <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('category',['id'=>$cate]) }}">{{$cate->name}}</a><span>&raquo;</span></li>
                  
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
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="HTML template" src="{{asset('assets/admin/images/banner-1.jpg')}}"></a>
                  
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="HTML template" src="{{asset('assets/admin/images/banner-2.jpg')}}"></a> </div>
                  
                  <!-- End Item --> 
                  
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
                  <label>Lọc sản phẩm</label>
                  <select id="short-by">
                    <option selected="selected">-Lọc theo</option>
                    <option value="{{Request::url()}}?short_by=tang_dan">Tăng dần</option>
                    <option value="{{Request::url()}}?short_by=giam_dan">Giảm dần</option>
                    <option value="{{Request::url()}}?short_by=kytu-az">Ký tự từ a - z</option>
                    <option value="{{Request::url()}}?short_by=kytu-za">Ký tự từ z - a</option>
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
            <div class="pagination-area">
           {{$product->links("pagination::bootstrap-4")}}
            </div>
          </div>
        </div>
        <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <div class="block category-sidebar">
            <div class="sidebar-title">
              <h3>Categories</h3>
            </div>
            <ul class="product-categories">
              <li class="cat-item current-cat cat-parent"><a href= "shop_grid.html">Women</a>
                <ul class="children">
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Accessories</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Dresses</a></li>
                      <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                        <ul  class="children">
                          <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a></li>
                          <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Sling bag</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; backpack</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Fabric Handbags</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Sling bag</a></li>
                    </ul>
                  </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Jewellery</a> </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Swimwear</a> </li>
                </ul>
              </li>
              <li class="cat-item cat-parent"><a href="shop_grid.html">Men</a>
                <ul class="children">
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Casual</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Designer</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Evening</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Hoodies</a></li>
                    </ul>
                  </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Jackets</a> </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Shoes</a> </li>
                </ul>
              </li>
              <li class="cat-item"><a href="shop_grid.html">Electronics</a></li>
              <li class="cat-item"><a href="shop_grid.html">Furniture</a></li>
              <li class="cat-item"><a href="shop_grid.html">KItchen</a></li>
            </ul>
          </div>
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
                    <li><a href="#"><i class="fa fa-angle-right"></i> {{$item->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="color-area">
                <h2 class="saider-bar-title">Color</h2>
                <div class="color">
                  <ul>
                    @foreach ($color as $item)
                    <li><a href="#"></a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="size-area">
                <h2 class="saider-bar-title">Size</h2>
                <div class="size">
                  <ul>
                    @foreach ($size as $item)
                    <li><a href="#">{{$item->name}}</a></li>
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
