@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page"
                                href="{{ route('home') }}">Home</a><span>»</span></li>
                        <li><strong>Chi tiết đơn hàng</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content" tabindex="-1" style="padding: 40px">
        <div class="col-full">
            <div class="woocommerce"></div>
            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <div class="order-detail">
                        <div class="row">
                            <div class="col-lg-4">
                                <figure class="card-box bg-white">
                                    <h5 style="">Hóa đơn</h5>
                                    <div class="cart-calculator-table table-content table-responsive">
                                        <table class="table table-striped " style="background: #DDDDDD;
                                            color: black;
                                            font-size: initial;">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Mã đơn hàng</td>
                                                    <td><span>{{ $bill->id }}</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Trạng thái</td>
                                                    <td>

                                                        @if ($bill->bill_active == 0)
                                                            <span class="text text-success">Chờ xác nhận</span>

                                                        @elseif($bill->bill_active == 1)
                                                            <span>Đã xác nhận</span>

                                                        @elseif($bill->bill_active == 2)
                                                            <span>Đã thanh toán - Đang giao hàng</span>

                                                        @elseif($bill->bill_active == 3)
                                                            <span>Đã Hoàn Thành</span>

                                                        @elseif($bill->bill_active == 4)
                                                            <span class="text text-danger">Hủy đơn hàng</span>

                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Thanh toán</td>
                                                    <td>
                                                        @if ($bill->payments == 0)
                                                            <span>Tiền mặt</span>
                                                        @else
                                                            <span>Online</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Tạm tính</td>
                                                    <td><span
                                                            class="price-ammount">{{ number_format($bill->total) . 'Đ' }}</span>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <td class="table-danger">Phí giao hàng</td>
                                                    <td><span class="price-ammount">0</span>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <td class="table-danger">Thuế</td>
                                                    <td><span class="price-ammount">0</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-total">
                                                    <td class="table-danger">Tổng tiền</td>
                                                    <td><span
                                                            class="price-ammount">{{ number_format($bill->total) . 'Đ' }}</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="form-group" style="margin:auto;display:table">
                                        @if (!$order->isPaymentMethod('cod') && $order->isStatus('pending-payment'))
                                        <a href="{{ route('client.payments.check-order', ['order_id' => $order->id, 'contact' => $order->billing->email]) }}"
                                            class=" food-btn w-100p btn btn-outline-danger"><span>Thanh toán</span></a>
                                    @endif
                                    @if ($order->canCancel())
                                        <a href="#"
                                            class="{{ parse_classname('btn-cancel-order') }} d-block text-center btn btn-outline-danger pt-2 pb-2"
                                            data-id="{{ $order->id }}"><span>Hủy</span></a>
                                    @endif

                                    </div> --}}

                                </figure>

                                <figure class="card-box bg-white">
                                    <h5 style="">Giao hàng</h5>
                                    <div class="cart-calculator-table table-content table-responsive">
                                        <table class="table table-striped " style="background: #DDDDDD;
                                            color: black;
                                            font-size: initial;">
                                            <tbody>
                                                <tr>
                                                    <td class="table-danger">Họ và tên</td>
                                                    <td>{{ $bill->full_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Email</td>
                                                    <td>{{ $bill->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Số điện thoại</td>
                                                    <td>{{ $bill->phone_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Địa chỉ giao hàng</td>
                                                    <td>{{ $bill->address }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-8 ">
                                <figure class="card-box bg-white">
                                    <h5 style="">Chi tiết</h5>
                                    <div class="cart-table table-content table-responsive">
                                        <table class="table table-striped " style="background: #DDDDDD;
                                            color: black;
                                            font-size: initial;">
                                            <thead>
                                                <tr class="table-danger">
                                                    <th>Ảnh</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if (count($bill->product) > 0)
                                                
                                                    @foreach ($bill->product as $item)
                                                        <tr class="" id="cart-item-{{ $item->id }}">
                                                            <td class="image-column">
                                                                <a href="{{route('detail',['id'=>$item->id])}}">
                                                                    <img style="width:100px"
                                                                        src="{{asset("storage/$item->image_url")}}"
                                                                        alt="{{ $item->title }}">
                                                                </a>
                                                            </td>
                                                            <td class="wide-column">
                                                                <a href="{{route('detail',['id'=>$item->id])}}">{{ $item->title }}</a>
                                                            </td>
                                                            <td class="product-price">
                                                                @if ($item)
                                                                    <strong>
                                                                        {{ number_format($item->price) . 'Đ' }}</strong>
                                                                @else
                                                                    <strong></strong>
                                                                @endif
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity text-center">
                                                                    {{ $bill->hasBillDetail->quantity }}
                                                                </div>
                                                            </td>
                                                            <td class="product-price">
                                                                    <strong> {{ number_format($item->price) . 'Đ' }}</strong>            
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                @else
                                                    <tr class="text-center" style="background:blanchedalmond;color:red">
                                                        <td colspan="5">- Đơn hàng của bạn đã bị hủy do lỗi hệ thống của
                                                            shop <br>
                                                            - Rất xin lỗi và mong quý khách thông cảm! Quý khách vui lòng chọn sản phẩm khác.
                                                        </td>
                                                    </tr>
                                                @endif


                                            </tbody>
                                        </table>
                                    </div>
                                </figure><!-- Cart Area End -->
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>

@endsection
