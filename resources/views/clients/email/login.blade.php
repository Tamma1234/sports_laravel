@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>»</span></li>
                    <li><strong>Đăng nhập khách hàng</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="page-content">
                <div class="text-center" style="margin: auto;width:50%">
                    <div class="content">

                        <h4>Đăng nhập khách hàng</h4>

                        <form action="{{ route('post.login') }}" class="crazy-customer-login-form" method="POST">
                            @csrf
                            <label for="reg_email">Email hoặc số điện thoại<span class="required">*</span></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Nhập Email của bạn"
                                    value="">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button class="button" type="submit" style="margin-bottom: 20px;"><i
                                    class="icon-user icons"></i>&nbsp; <span>Tiếp tục</span></button>
                        </form>
                    </div>
                </div>

                <!--register area end-->
            </div>
        </div>
    </section>
@endsection
