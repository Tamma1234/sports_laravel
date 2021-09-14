@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')

@section('content')

<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>»</span></li>
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
                            <li style="border-bottom: 1px solid white"><a style="color: white" href=""  class="nav-link">Tất cả đơn hàng</a></li>
                           
                    
                            <li><a style="color: white" href="" class="nav-link">logout</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <figure class="ps-block--vendor-status">
                            <figcaption style="font-size: 20px;font-weight:600;padding-bottom:20px">Tất cả đơn hàng</figcaption>
                            @if (count($bills))
                            <div class="">
                                <table class="table table-dark table-striped" >
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
                                            <tr class="order-item" id="{{'order-item-'.$order->id}}">
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->date_order}}</td>
                                                <td>{{number_format( $order->total).'Đ'}}</td>
                                                <td>{{$order->payments}}</td>
                                                <td>{{$order->bill_active}}</td>
                                                <td>
                                                    <a href="{{route('order_detail',['id'=>$order->id])}}" class="btn btn-danger">Chi tiết</a>
                                                    |
                                                    <a href="#" class="btn btn-danger" data-id="">Hủy</a>
                                                </td>
                                            </tr>
                                                
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="text-center" id="example1_paginate">
                                        {{$bills->links("pagination::bootstrap-4")}}
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


