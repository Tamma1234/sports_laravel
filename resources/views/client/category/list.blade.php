@extends('client.layout.detail')

@section('title', 'Danh mục')
<!-- Slidedetail  -->

@section('content')

<!-- service section -->


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
              <div class="view-mode">
                <ul>
                  <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th-large"></i> </a> </li>
                  <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
                </ul>
              </div>
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">18</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
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
                            <figure> <img class="first-img" src="{{asset($item->image_url)}}" alt="HTML template"> <img class="hover-img" src="{{asset($item->image_url)}}" alt="HTML template"></figure>
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
         
        </aside>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 

<!-- Blog -->


<!-- our clients Slider -->

<!-- BANNER-AREA-END -->


@endsection
