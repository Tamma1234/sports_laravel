@extends('clients.layouts.detail')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="col-main col-sm-6 col-xs-6" style="margin-left: 25%;padding:40px">
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
                            placeholder="Nhập Họ và tên" required="true">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="billing_email">
                        Email khách hàng
                        <sup>*</sup>
                    </label>
                    <div class="form-group__content">
                        <input type="email" name="email" class="form-control" placeholder="Nhập email"
                            required="true">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="phone_number">
                        Số điện thoại
                        <sup>*</sup>
                    </label>
                    <div class="form-group__content">
                        <input type="text" name="phone_number" class="form-control"
                            placeholder="Nhập só điện thoại" required="true">
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="address">
                        Địa chỉ
                    </label>
                    <div class="form-group__content">
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Nhập Địa chỉ. Ví dụ: Số nhà, tên dường, ...">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- textarea -->

                    <label for="note">Thanh toán</label>
                    <div id="paypal-button"></div>

                </div>
            </div>
        </div>
    </div>
</div></div>
</div>



@endsection

@section('script')

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    // var usd = document.getElementById('vnp_pay_pal').value;
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
@endsection

