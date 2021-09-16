@extends('admin.layouts.main')

@section('title', 'Danh sách danh mục')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.templates.content-header',['name'=>'Đơn hàng'])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh Sách Đơn Hàng</h3>
                <a href="#"><i style="padding: 5px" class="fa fa-plus"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">

                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example1"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">MÃ</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Thời gian
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Giá tiền
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Phương Thức
                                            Thanh Toán</th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">Trạng
                                            thái</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bill as $item)
                                        <tr class="odd">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->date_order }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td class="text-center">
                                                @if ($item->payments == 0)
                                                    <span>Tiền mặt</span>
                                                @else
                                                    <span>Online</span>
                                                @endif
                                            </td>
                                            <td>
                                                <select onchange="activeAll({{ $item->id }})" class="form-control"
                                                    name="bill_active" id="activeAll">
                                                    <option value="0" @if ($item->bill_active == 0)
                                                        selected
                                                    @endif>Đang chờ xác nhận</option>
                                                    <option value="1" @if ($item->bill_active == 1)
                                                        selected
                                                        @endif>Đã xác nhận </option>
                                                    <option value="2" @if ($item->bill_active == 2)
                                                        selected
                                                        @endif>Đang xử lý</option>
                                                    <option value="3" @if ($item->bill_active == 3)
                                                        selected
                                                        @endif> Đã thanh toán</option>
                                                    <option value="4" @if ($item->bill_active == 4)
                                                        selected
                                                        @endif>Đang giao hàng</option>
                                                    <option value="5" @if ($item->bill_active == 5)
                                                        selected
                                                        @endif>Đã hoàn thành</option>
                                                    <option value="6" @if ($item->bill_active == 6)
                                                        selected
                                                        @endif >Hủy đơn hàng</option>
                                                    </select>


                                                </td>
                                                <td>
                                                    <button class="btn btn-info" data-target="#bill-{{ $item->id }}"
                                                        data-toggle="modal"><i class="far fa-eye"></i></button>
                                                    {{-- <button class="btn btn-danger"
                                                        onclick='confirmDel("{{ route('bill.remove', ['id' => $item->id]) }}")'><i
                                                            class="fas fa-trash-alt"></i></button> --}}
                                                </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Mã</th>
                                        <th rowspan="1" colspan="1">Thời Gian</th>
                                        <th rowspan="1" colspan="1">Giá Tiền</th>
                                        <th rowspan="1" colspan="1">Phương Thức Thanh Toán</th>
                                        <th rowspan="1" colspan="1">Trạng Thái</th>
                                        <th rowspan="1" colspan="1">
                                            Thao tác
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                {{ $bill->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            @foreach ($bill as $item)
            <div class="modal fade" id="bill-{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document" style="max-width:800px">
                 <div class="modal-content">
                            <div class="modal-header custom-style bg-info">
                                <h5 class="modal-title" id="custom-modal-title">Chi tiết đơn hàng</h5>
                            </div>
                                <div class="modal-body">
                                    
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <h5>Hóa đơn</h5>
                                            <div class="cart-calculator-table table-content table-responsive">
                                                <table class="table table-striped " style="background: #DDDDDD;
                                                                    color: black;
                                                                    font-size: initial;">
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <td class="table-danger">Mã đơn hàng</td>
                                                            <td><span>{{ $item->id }}</span></td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <td class="table-danger">Trạng thái</td>
                                                            <td>
                                                                @switch($item->bill_active )
                                                                    @case(0)
                                                                        <span class="text text-success">Chờ xác nhận</span>
                                                                    @break
                                                                    @case(1)
                                                                        <span>Đã xác nhận</span>
                                                                    @break
                                                                    @case(2)
                                                                        <span>Đã xử lí </span>
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
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <td class="table-danger">
                                                                Thanh toán
                                                            </td>
                                                            <td>
                                                                @if ($item->payments)
                                                                    <span>Tiền mặt</span>
                                                                @else
                                                                    <span>Online</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <td class="table-danger">Tạm tính</td>
                                                            <td><span
                                                                    class="price-ammount">{{ number_format($item->total) . 'Đ' }}</span>
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
                                                                    class="price-ammount">{{ number_format($item->total) . 'Đ' }}</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <h5>Giao hàng</h5>
                                            <div class="cart-calculator-table table-content table-responsive">
                                                <table class="table table-striped " style="background: #DDDDDD;
                                                                        color: black;
                                                                        font-size: initial;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="table-danger">Họ và tên</td>
                                                            <td>{{ $item->hasCustomer->full_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-danger">Số điện thoại</td>
                                                            <td>{{ $item->hasCustomer->phone_number }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-danger">Email</td>
                                                            <td>{{ $item->hasCustomer->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-danger">Địa chỉ</td>
                                                            <td>{{ $item->hasCustomer->address }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
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
                                                                    id="
                                                                cart-item-{{ $item->id }}">
                                                                <td class="image-column">
                                                                    <a href="">
                                                                        <img style="width:100px"
                                                                            src="{{ asset($item->hasProduct->image_url) }}"
                                                                            alt="{{ $item->title }}">
                                                                    </a>
                                                                </td>
                                                                <td class="wide-column">
                                                                    <a href="">{{ $item->hasProduct->title }}</a>
                                                                </td>
                                                                <td class="product-price">
                                                                    <strong>
                                                                        {{ number_format($item->hasProduct->price) . 'Đ' }}</strong>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="quantity">
                                                                        {{ $item->quantity }}
                                                                    </div>
                                                                </td>
                                                                <td class="product-price"><strong
                                                                        class=""> {{ number_format($item->hasProduct->price) . 'Đ' }} </strong>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="modal-footer">
                            <button type="button"class="btn btn-secondary"
                            data-dismiss="modal">Close</button> 
                            <button type="button" class="btn btn-info" id=""
                                    onclick="billDestroy()"> Gửi
                            </button>
                        </div>
                    </div>
             </div>
            </div>
            @endforeach
            
        </div>
</div>
                  
            @endsection
