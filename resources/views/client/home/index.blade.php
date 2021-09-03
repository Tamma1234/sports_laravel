@extends('client.layout.detail')

@section('title', 'Trang Chủ')
<!-- Slidedetail  -->
@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
          <li class=""> <a title="Go to Home Page" href="{{route('list')}}">Danh sách sản phẩm</a><span>&raquo;</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumbs End --> 
<!-- Main Container -->
<div class="main-container col1-layout">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="shop-inner">
          <div class="page-title">
            <h2>Mặt hàng hot</h2>
          </div>
          <div class="toolbar column">
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
                  <option selected="selected">16</option>
                  <option>20</option>
                  <option>25</option>
                  <option>30</option>
                </select>
              </div>
            </div>
          </div>
          <div class="product-grid-area">
            <ul class="products-grid">
              @foreach ($product as $item)
              <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-new-label new-right">New</div>
                      <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="{{route('detail',['id'=>$item->id])}}">
                        <figure> <img class="first-img" src="{{asset($item->image_url)}}" alt="HTML template"> <img class="hover-img" src="{{asset($item->image_url)}}" alt="HTML template"></figure>
                        </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{$item->title}} </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">{{number_format($item->price) .'Đ' }}</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" onclick="addCart({{$item->id}})" class="add-to-cart"><span> Thêm giỏ hàng</span> </button>
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
            {{$product->links("pagination::bootstrap-4")}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- our clients Slider -->

<!-- BANNER-AREA-END -->


@endsection




