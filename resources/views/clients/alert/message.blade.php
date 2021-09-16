@extends('clients.layouts.detail')
@section('title', 'Thông báo')


@section('content')

<div class="ps-faqs">
    <div class="container">
        <div class="ps-section__header" style="padding-bottom: 100px;text-align:center">
            <h1>Thông báo </h1>
        </div>
        <div class="ps-section__content" >
            <div class="row">
                <div class="col-md-12" style="margin: 0px auto;">
                    <div class="alert alert text-center">
                       Bạn đạ đặt hàng thành công tại của hàng của chúng tôi. Bạn vui lòng vào xác nhận đơn hàng ở email nhé !
                    </div>
                    <div class="buttons text-center" style="margin: 20px auto;">
                        <a href="{{route('home')}}" class="btn btn-danger">Về trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection