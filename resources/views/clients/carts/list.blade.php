@extends('clients.layouts.detail')

@section('title', 'Danh sách giỏ hàng')
<!-- Slidedetail  -->

@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order">
                        <div class="page-title">
                            <h2>Giỏ Hàng</h2>
                        </div>
                        <div class="order-detail-content">
                            <div class="table-responsive" id="list-carts">
                                @if (Session::has('cart') != null)
                                    <table class="table table-bordered cart_summary">

                                        <thead>
                                            <tr>
                                                <th class="cart_product">Sản phẩm</th>
                                                <th>Mô tả</th>
                                                <th>Trạng thái</th>
                                                <th>Giá tiền</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                                <th class="action"><i class="fa fa-trash-o"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Session::get('cart')->products as $item)
                                                <tr>
                                                    <td class="cart_product">
                                                        <a href="{{ route('detail', ['id' => $item['productInfo']->id]) }}">
                                                            <img src="{{ asset('storage/' . $item['productInfo']->image_url) }}" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td class="cart_description">
                                                        <p class="product-name">
                                                            <a href="{{ route('detail', ['id' => $item['productInfo']->id]) }}">{{ $item['productInfo']->title }}</a>
                                                        </p>
                                                        <span>
                                                            <a href="#">Size: <strong>{{ $item['size'] }}</strong></a>
                                                        </span>
                                                    </td>
                                                    <td class="availability in-stock">
                                                        @if ($item['productInfo']->is_active == 0)
                                                            <span class="label">Còn hàng</span>
                                                        @else
                                                            <span class="label">Hết hàng</span>
                                                        @endif
                                                    </td>
                                                    <td class="price">
                                                        <span id="price">{{ number_format($item['productInfo']->price) }},Đ</span>
                                                    </td>
                                                    <td class="qty">
                                                        <input class="input-sm" type="number"  min="1" max="10" data-id="{{ $item['productInfo']->id }}" value="{{ $item['quantity'] }}">
                                                    </td>
                                                    <td class="price">
                                                        <span id="totalprice">{{ number_format($item['price']) }}Đ</span>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="javascript:">
                                                            <i class="icon-close" data-id="{{ $item['productInfo']->id }}"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td colspan="2" rowspan="2"></td>
                                                <td colspan="3">Tổng sản phẩm</td>
                                                <td colspan="2">{{ Session::get('cart')->totalQuantity }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><strong>Tổng tiền</strong></td>
                                                <td colspan="2">
                                                    <strong> {{ number_format(Session::get('cart')->totalPrice) }}Đ </strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="cart_navigation">
                                        <a class="checkout-btn" href="{{ route('checkout-list') }}">
                                            <i class="fa fa-check"></i>Thanh toán
                                        </a>
                                    </div>
                                @else
                                    <div class="col-main">
                                        <div class="text-center">
                                            <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                                        </div>
                                    </div>
                            </div>
                            @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
