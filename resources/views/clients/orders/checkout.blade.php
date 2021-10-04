@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>»</span></li>
                        <li><strong>Thanh toán</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <form action="{{ route('post-checkout') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-main col-sm-6 col-xs-12">
                        <div class="page-title">
                            <h2>Thông tin khách hàng</h2>
                        </div>
                        <div class="page-content checkout-page">
                            <div class="box-border">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="billing_name">
                                            Họ và tên khách hàng
                                            <sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input type="text" name="full_name" id="billing_name" class="form-control"
                                                placeholder="Nhập Họ và tên" >
                                        </div>
                                        @error('full_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_email">
                                            Email khách hàng
                                            <sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input type="email" name="email" class="form-control" placeholder="Nhập email"
                                                >
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="phone_number">
                                            Số điện thoại
                                            <sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input type="phone_number" name="phone_number" class="form-control"
                                                placeholder="Nhập só điện thoại" >
                                        </div>
                                        @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="address">
                                            Địa chỉ
                                        </label>
                                        <div class="form-group__content">
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="Nhập Địa chỉ. Ví dụ: Số nhà, tên dường, ...">
                                        </div>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- textarea -->

                                        <label for="note">Ghi chú</label>
                                        <textarea name="note" class="form-control" rows="3"
                                            placeholder="Enter ..."></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="right sidebar col-sm-6 col-xs-12">
                        <div class="sidebar-checkout block">
                            <div class="page-title">
                                <h2>Đơn hàng của bạn</h2>
                            </div>
                            <div class="block-content">
                                <table class="table table-dark table-striped" style="font-size: 18px;
                                                font-weight: 600;
                                                margin-bottom: 0px;
                                                font-family: 'Poppins', sans-serif;">
                                    <thead>
                                        <tr>
                                            <th style="font-size:large;font-weith:600">Sản Phẩm</th>
                                            <th style="font-size:large;font-weith:600">Thành Tiền</th>
                                        </tr>
                                    </thead>

                                    <tbody style="font-size: large;font-family: 'FontAwesome';">
                                        @if (Session::has('cart') != null)
                                            @foreach ($cart->products as $value)

                                                <tr class="crazy-cart-item crazy-cart-item-40" id="cart-item-40">
                                                    <td class="wide-column">
                                                        <img width="100px" style="float: left;padding-right:10px"
                                                            src="{{ asset("storage/".$value['productInfo']->image_url) }}" alt="">
                                                        <p>{{ $value['productInfo']->title }}</p>
                                                        <span><strong>Số lượng :</strong>
                                                            {{ $value['quantity'] . ',' }}</span>
                                                        <span> <strong>Size :</strong>{{ $value['size'] }}</span>
                                                    </td>
                                                    <td class="cart-product-price"><strong
                                                            class="crazy-item-total-price">{{ number_format($value['price']) }}Đ</strong>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>

                                    <tfoot style="font-size: x-large;color: red;font-family: 'FontAwesome';">
                                        @if (Session::has('cart') != null)
                                            <tr>
                                                <th style="font-weith:bold">Tổng số lượng</th>
                                                <td class="crazy-cart-sub-total-ammount">{{ $cart->totalQuantity }}</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th style="font-weith:bold">Tổng thành tiền</th>
                                                <td>
                                                    <strong
                                                        class="crazy-cart-total-ammount">{{ number_format($cart->totalPrice) }}Đ</strong>
                                                </td>
                                            </tr>
                                            @php
                                                $vnp_pay_pal = $cart->totalPrice / 2303;
                                            @endphp
                                        @endif
                                    </tfoot>

                                </table>
                                <div class="payment_method">
                                    <div class="panel-default">
                                        <div class="checkout-payment ">
                                            <div class="payment-group ">
                                                <div class="form-group">
                                                    <div class="ps-radio">
                                                     <input type="radio" onchange="tienMat()" id="payment-method-cod" checked value="0" name="payments" /> 
                                                        <label class="payment-label"
                                                            for="payment-method-cod">Thanh toán khi nhận hàng</label>
                                                    </div>
                                                    <div class="payment-description" 
                                                        data-method="cod" id="payment-description-cod">
                                                        <p class="payment-text">Bạn chỉ phải thanh toán khi nhận hàng và kiểm tra đúng đơn hàng
                                                            hay ko</p>
                                                    </div>
                                                </div>

                                            </div>
                               
                                            <div class="payment-group ">
                                                <div class="form-group">
                                                    <div class="ps-radio">
                                                        <input onclick="online()" type="radio" id="payment-method-transfer" value="2" name="payments" /> 
                                                        <label class="payment-label-method "
                                                            for="payment-method-transfer">Thanh toán chuyển khoản</label>
                                                    </div>
                                                    <div class="description-transfer "
                                                        data-method="transfer" id="payment-description-transfer">
                                                        <p class="description-transfer">Quý khách sẽ trả tiền trước qua chuyển khoản xong mới nhận hàng
                                                        </p>

                                                        <div id="paypal-button"></div>
                                                        @if (Session::has('cart') != null)
                                                            <input type="hidden" name="totalPrice" id="vnp_pay_pal"
                                                                value="{{ round($vnp_pay_pal, 2) }}">
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="order_button">
                                        <button   type="submit" class="btn btn-danger">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </form>
            </div>
        </div>
    </section>

    <!-- our clients Slider -->

    <!-- BANNER-AREA-END -->


@endsection

@section('script')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        var usd = document.getElementById('vnp_pay_pal').value;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AdEB28Cvf_5FolvUztgOdyaDwElHlxlTCGcSuP7Ri0VuBe6vBG3oVpRX6bJ8LpTDvUctxYEl_O5gOz4K',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: `${usd}`,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    window.location.href = "http://127.0.0.1:8000/list-order";
                    // window.alert('Cảm ơn bạn đã mua hàng của shop!');
                });
            }
        }, '#paypal-button');


    </script>
    <script>
     function tienMat(){
        // console.log($('#payment').val());
         if ($('#payment:checked')) {
            $('#payment-description-cod').removeClass('payment-description');
         }
            $('#payment-description-transfer').addClass('description-transfer');     
        //  label.removeClass('payment-description');
        // document.getElementById('payment-description-cod').style.display = "block";
     }

     function online(){
        // console.log($('#payment').val());
         if ($('#payment_method:checked')) {
            $('#payment-description-transfer').removeClass('description-transfer');
         }
         $('#payment-description-cod').addClass('payment-description');   
       
        //  label.removeClass('payment-description');
        // document.getElementById('payment-description-cod').style.display = "block";
     }
    </script>

@endsection
