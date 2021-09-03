@extends('client.layout.detail')

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
                <form action="http://khoathongminh.mi.vcc.vn/dat-hang" class="crazy-checkout-form crazy-place-order-form"
                    method="POST">
                    <input type="hidden" name="_token" value="j6CeEEWZomavmoDNz6fEhme9cxoKlz7r8esfLBw3">
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
                                            <input type="text" name="billing_name" id="billing_name" class="form-control"
                                                placeholder="Nhập Họ và tên" required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_email">
                                            Email khách hàng
                                            <sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input type="email" name="billing_email" id="billing_email"
                                                class="form-control" placeholder="Nhập email" required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_phone_number">
                                            Số điện thoại
                                            <sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input type="text" name="billing_phone_number" id="billing_phone_number"
                                                class="form-control" placeholder="Nhập só điện thoại" required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_region_id">
                                            Tỉnh / Thành phố
                                        </label>
                                      
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_district_id">
                                            Quận / huyện
                                        </label>
                                      
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_ward_id">
                                            Xã / phường
                                        </label>
                                       
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="billing_address">
                                            Địa chỉ
                                        </label>
                                        <div class="form-group__content">
                                            <input type="text" name="billing_address" id="billing_address"
                                                class="form-control"
                                                placeholder="Nhập Địa chỉ. Ví dụ: Số nhà, tên dường, ...">
                                        </div>
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

                                        <tr class="crazy-cart-item crazy-cart-item-40" id="cart-item-40">
                                            <td class="wide-column">
                                                <div>Khóa cửa thông minh Xiaomi LOOCK Classic</div>
                                                <div>Số lượng: 1</div>
                                            </td>
                                            <td class="cart-product-price"><strong
                                                    class="crazy-item-total-price">6.990.000Đ</strong></td>

                                        </tr>

                                    </tbody>
                                    <tfoot style="font-size: x-large;color: red;font-family: 'FontAwesome';">
                                        <tr>
                                            <th style="font-weith:bold">Tạm Tính</th>
                                            <td class="crazy-cart-sub-total-ammount">6.990.000Đ</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th style="font-weith:bold">Tổng thành tiền</th>
                                            <td><strong class="crazy-cart-total-ammount">6.990.000Đ</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="payment_method">


                                    <div class="panel-default">
                                        <div class="checkout-payment crazy-payment-methods">
                                            <div class="payment-group crazy-payment-method-option">
                                                <div class="form-group">
                                                    <div class="ps-radio">
                                                        <input type="radio" class="crazy-payment-method-value" value="cod"
                                                            name="payment_method" id="payment-method-cod" checked="">
                                                        <label class="payment-label crazy-payment-method-label"
                                                            for="payment-method-cod">Thanh toán khi nhận hàng</label>
                                                    </div>
                                                    <div class="crazy-payment-method-description crazy-payment-method-description-cod show"
                                                        data-method="cod" id="payment-description-cod">
                                                        <p>Bạn chỉ phải thanh toán khi nhận hàng và kiểm tra đúng đơn hàng
                                                            hay ko</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="payment-group crazy-payment-method-option">
                                                <div class="form-group">
                                                    <div class="ps-radio">
                                                        <input type="radio" class="crazy-payment-method-value"
                                                            value="transfer" name="payment_method"
                                                            id="payment-method-transfer">
                                                        <label class="payment-label crazy-payment-method-label"
                                                            for="payment-method-transfer">Thanh toán chuyển khoản</label>
                                                    </div>
                                                    <div class="crazy-payment-method-description crazy-payment-method-description-transfer "
                                                        data-method="transfer" id="payment-description-transfer">
                                                        <p>Quý khách sẽ trả tiền trước qua chuyển khoản xong mới nhận hàng
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="order_button">

                                        <button type="submit" class="btn btn-danger">Đặt hàng</button>
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
