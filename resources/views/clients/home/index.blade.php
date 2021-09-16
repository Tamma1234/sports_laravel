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
                        <li class="___class_+?5___"> <a title="Go to Home Page" href="{{ route('list') }}">Danh sách sản
                                phẩm</a><span>&raquo;</span></li>
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
                                                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                            href="{{ route('detail', ['id' => $item->id]) }}">
                                                            <figure> <img class="first-img"
                                                                    src="{{ asset($item->image_url) }}"
                                                                    alt="HTML template">
                                                                <img class="hover-img"
                                                                    src="{{ asset($item->image_url) }}"
                                                                    alt="HTML template">
                                                            </figure>
                                                        </a> </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html">{{ $item->title }} </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> </div>
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
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Modal title</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-5 col-lg-5">
                                                                                        <img width="" src="{{$item->image_url}}" alt="">
                                                                                </div>
                                                                                <div class="col-md-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="title">Tiêu đề:</label>
                                                                                            <span>{{ $item->title }}</span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="size-area">
                                                                                            <h2 class="saider-bar-title">Size</h2>
                                                                                            <div class="size">
                                                                                                <ul style="display:contents">
                                                                                                    @foreach ($item->size as $size)
                                                                                                        <li>
                                                                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                                                                <input type="checkbox"  class="size" data-size ="{{ $size->value }}"  id="size-{{ $size->id }}"
                                                                                                                    name="size" value="{{ $size->name }}" >
                                                                                                                {{ $size->name }}
                                                                                                                <span></span>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                    @endforeach
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cart-plus-minus">
                                                                                        <label for="qty">Quantity:</label>
                                                                                        <div class="numbers-row">
                                                                                            <input type="number" class="qty" title="Qty" value="1" maxlength="12"
                                                                                                id="qty-{{$item->id}}" min="1" max="10" name="quantity">
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"  class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                                <button type="button" id="{{ $item->id }}" onclick="addCart({{$item->id}})"
                                                                                    class="add-to-cart"><span> Thêm giỏ hàng</span>
                                                                                </button>
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
                            {{ $product->links('pagination::bootstrap-4') }}
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
