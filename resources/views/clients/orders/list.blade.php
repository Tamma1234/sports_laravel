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
                        <li><strong>Danh sách đơn hàng</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="main_content_area" style="padding: 30px;">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3" style="background: #e83f33;">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li style="border-bottom: 1px solid white"><a style="color: white" href=""
                                        class="nav-link">Tất cả đơn hàng</a></li>


                                <li><a style="color: white" href="" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <figure class="ps-block--vendor-status">
                                <figcaption style="font-size: 20px;font-weight:600;padding-bottom:20px">Tất cả đơn hàng
                                </figcaption>
                                @if (count($bills))
                                    <div class="">
                                <table class=" table table-dark
                                        table-striped">
                                        <thead style=" background: black;
                                        color: white;">
                                            <tr>
                                                <th>Mã</th>

                                                <th>Thời gian</th>
                                                <th>Giá tiền</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>Trạng thái</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: black;">
                                            @foreach ($bills as $order)
                                                <tr class="order-item" id="{{ 'order-item-' . $order->id }}">
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->date_order }}</td>
                                                    <td>{{ number_format($order->total) . 'Đ' }}</td>
                                                    <td class="text-center">
                                                        @if ($order->payments == 0)
                                                            <span>Tiền mặt</span>
                                                        @else
                                                            <span>Online</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @switch($order->bill_active)
                                                            @case(0)
                                                                <span class="text text-success">Chờ xác nhận</span>
                                                                @break
                                                            @case(1)
                                                            <span>Đã xác nhận</span>
                                                                @break
                                                            @case(2)
                                                            <span >Đã xử lí</span>
                                                                @break
                                                            @case(3)
                                                            <span class="text text-primary"> Đã thanh toán</span>
                                                                @break
                                                            @case(4)
                                                            <span>Đang giao hàng</span>
                                                                @break
                                                            @case(5)
                                                            <span> Đã giao hàng</span>
                                                                @break
                                                            @case(6)
                                                            <span class="text text-danger">Hủy đơn hàng</span>
                                                                @break
                                                            @default
                                                        @endswitch
                                                        {{-- @if ($order->bill_active == 0)
                                                            <span>Đang chờ xác nhận</span>
                                                        @else
                                                            <span>Đã xác nhận</span>
                                                        @endif --}}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('order_detail', ['id' => $order->id]) }}"
                                                            class="btn btn-danger">Chi tiết</a>
                                                        @if ($order->bill_active != 6)
                                                        | <a href="#"  data-target="#order-{{ $order->id }}"  data-toggle="modal" data-id="" class="btn btn-danger" data-id="">Hủy</a>
                                                        @endif
                                                    </td>
                                                    <div class="modal fade" id="order-{{ $order->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form >
                                                                @csrf
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
                                                                      <textarea name="" id="cause-destroy" style="width:100%;height:100px;background:bisque" cols="50" rows="20" placeholder="Lí do hủy"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"  class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-info" id="{{ $order->id }}" onclick="billDestroy({{$order->id}})"> Gửi
                                                                        </button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                        </table>
                                        <div class="col-12 col-md-12">
                                            <div class="text-center" id="example1_paginate">
                                                {{ $bills->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-warning text-center">
                                        Không có đơn hàng nào!
                                    </div>
                                @endif

                            </figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
