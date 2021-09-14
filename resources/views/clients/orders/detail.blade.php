@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')

@section('content')

<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>»</span></li>
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
                                                    <td  class="table-danger">Mã đơn hàng</td>
                                                    <td><span>{{ $bill->id }}</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Trạng thái</td>
                                                    <td><span>{{ $bill->bill_active }}</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Thanh toán</td>
                                                    <td><span>{{ $bill->payments }}</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <td class="table-danger">Tạm tính</td>
                                                    <td><span
                                                            class="price-ammount">{{ number_format($bill->total).'Đ' }}</span>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <td class="table-danger">Phí giao hàng</td>
                                                    <td><span
                                                            class="price-ammount">0</span>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <td class="table-danger">Thuế</td>
                                                    <td><span
                                                            class="price-ammount">0</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-total">
                                                    <td class="table-danger">Tổng tiền</td>
                                                    <td><span
                                                            class="price-ammount">{{ number_format($bill->total).'Đ' }}</span>
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
                                                    <td>{{ $customer->full_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Số diện thoại</td>
                                                    <td>{{ $customer->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Email</td>
                                                    <td>{{ $customer->phone_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Địa chỉ giao hàng</td>
                                                    <td>{{ $customer->address }}</td>
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
                                                @foreach ($billdetail as $key => $item)
                                                    <tr class=""
                                                        id="cart-item-{{$item->id}}">
                                                        <td class="image-column">
                                                            <a href="">
                                                                <img style="width:100px" src="{{asset($item->hasProduct->image_url )  }}"
                                                                    alt="{{ $item->title  }}">
                                                            </a>
                                                        </td>
                                                        <td class="wide-column">
                                                            <a
                                                                href="">{{ $item->hasProduct->title }}</a>
                                                        </td>
                                                        <td class="product-price">
                                                            <strong> {{ $item->hasProduct->price  }}</strong></td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                {{ $item->hasProduct->quantity }}
                                                            </div>
                                                        </td>
                                                        <td class="product-price"><strong
                                                                class=""> {{ $item->hasProduct->price  }} </strong>
                                                        </td>
                                                    </tr>
                                                @endforeach
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


