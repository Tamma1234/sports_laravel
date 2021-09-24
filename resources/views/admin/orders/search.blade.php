@extends('admin.layouts.main')

@section('title', 'Danh sách danh mục')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.templates.content-header',['name'=>'Đơn Hàng'])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kết quả tìm kiếm </h3>
                <a href="#"><i style="padding: 5px" class="fa fa-plus"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">

                        <div class="col-sm-12 col-md-6">
                            <form action="{{route('search.bill')}}" method="post">
                                @csrf
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="example1" name="keyword_submit"></label>
                                <button class="btn-search" style="color: blue;
                                border: 1px solid;
                                border-radius: 2px" type="submit"><i
                                    class="fa fa-search"></i></button>
                    </div>
                        </form>
                          
                                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="text-center">
                                        <th class="sorting sorting_asc" width="80px" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">MÃ Đơn Hàng
                                        </th>
                                        <th class="sorting sorting_asc" width="280px" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Tên Khách Hàng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Thời Gian
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Giá Tiền
                                        </th>

                                        <th class="sorting" width="150px" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Thanh Toán</th>

                                        <th class="sorting" width="200px" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">Trạng
                                            Thái</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($search_bill as $item)
                                        <tr class="odd">
                                            <td colspan="1">{{ $item->id }}</td>
                                            <td colspan="1" class="text-center">
                                                {{ $item->full_name  }}
                                            </td>
                                            <td colspan="1">{{ $item->date_order }}</td>
                                            <td colspan="1">{{ number_format($item->total) . 'Đ' }}</td>
                                            <td class="text-center" colspan="1">
                                                @if ($item->payments == 0)
                                                    <span>Tiền mặt</span>
                                                @else
                                                    <span>Online</span>
                                                @endif
                                            </td>
                                            <td colspan="1">

                                                @if ($item->bill_active == 2)
                                                    <select onchange="activeAll({{ $item->id }})" class="form-control"
                                                        name="bill_active" id="activeAll">
                                                        <option disabled value="2" @if ($item->bill_active == 2)
                                                            selected
                                                @endif> Đã thanh toán - Đang giao hàng</option>
                                                <option value="3" @if ($item->bill_active == 3)
                                                    selected
                                    @endif>Đã hoàn thành</option>
                                    </select>
                                @elseif($item->bill_active == 3)
                                    <select onchange="activeAll({{ $item->id }})" class="form-control"
                                        name="bill_active" id="activeAll">
                                        <option disabled value="3" @if ($item->bill_active == 3)
                                            selected
                                            @endif>Đã hoàn thành</option>
                                    @elseif($item->bill_active == 4)
                                        <select disabled onchange="activeAll({{ $item->id }})" class="form-control"
                                            name="bill_active" id="activeAll">
                                            <option disabled value="4" @if ($item->bill_active == 4)
                                                selected
                                                @endif>Hủy đơn hàng</option>
                                        </select>

                                    @else
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
                                                @endif> Đã thanh toán - Đang giao hàng</option>

                                            <option value="3" @if ($item->bill_active == 3)
                                                selected
                                                @endif>Đã hoàn thành</option>
                                            <option value="4" @if ($item->bill_active == 4)
                                                selected
                                                @endif >Hủy đơn hàng</option>
                                        </select>
                                        @endif

                                        </td>
                                        <td colspan="2">
                                            <button class="btn btn-info" id="view-detail"
                                                data-target="#bill-{{ $item->id }}" data-toggle="modal"><i
                                                    class="far fa-eye"></i></button>
                                            <button class="btn btn-danger"
                                                onclick='confirmDel("{{ route('order.remove', ['id' => $item->id]) }}")'><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th rowspan="1" colspan="1">Mã Đơn Hàng</th>
                                        <th rowspan="1" colspan="1">Tên Khách Hàng</th>
                                        <th rowspan="1" colspan="1">Thời Gian</th>
                                        <th rowspan="1" colspan="1">Giá Tiền</th>
                                        <th rowspan="1" colspan="1">Thanh Toán</th>
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
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
         
            @foreach ($search_bill as $item)
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
                                        <table class="table table-striped "
                                            style="background: #DDDDDD;
                                                                                                    color: black;
                                                                                                    font-size: initial;">
                                            <tbody>
                                                <tr>
                                                    <td class="table-danger">Họ và tên</td>
                                                    <td>{{ $item->full_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Số điện thoại</td>
                                                    <td>{{ $item->phone_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Email</td>
                                                    <td>{{ $item->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-danger">Địa chỉ</td>
                                                    <td>{{ $item->address }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <h5 style="">Chi tiết</h5>
                                    <div class="cart-table table-content table-responsive">
                                        <table class="table table-striped "
                                            style="background: #DDDDDD;
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


                                                @if ($item->product != null)
                                                    @foreach ($item->product as $pro)
                                                        <tr class="" id=" cart-item-{{ $pro->id }}">
                                                            <td class="image-column">
                                                                <a href="">
                                                                    <img style="width:100px"
                                                                        src="{{ asset($pro->image_url) }}"
                                                                        alt="{{ $pro->title }}">
                                                                </a>
                                                            </td>
                                                            <td class="wide-column">
                                                                <a href="">{{ $pro->title }}</a>
                                                            </td>
                                                            <td class="product-price">
                                                                <strong> {{number_format($pro->price).'Đ'  }}
                                                                </strong>
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    {{ $item->hasBillDetail->quantity }}
                                                                </div>
                                                            </td>
                                                            <td class="product-price"><strong
                                                                    class=""> {{number_format($pro->price).'Đ'  }} </strong>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                    
                                               @else
                                                 <tr class="
                                                                    text-center">
                                                            <td colspan="5">Đơn hàng đã bị hủy do sản phẩm hiện đã hết
                                                                hàng.
                                                            </td>
                                                        </tr>
                                                    @endif



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="
                                                                    modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info" id="" onclick="billDestroy()"> Gửi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
          

        </div>
    </div>
@endsection
@section('script')

    <script type='text/javascript'>
        @if (session('msg'))
            swal("Thông báo", "{{ session('msg') }}!", "info");
        @endif
        // Hàm thông báo khi click buton xóa
        function confirmDel(redirectUrl) {
            // let redirectUrl = $(this).attr('id');
            console.log(redirectUrl);
            swal({
                    title: "Bạn có muốn hủy đơn hàng không?",
                    // text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,

                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = redirectUrl;
                    } else {
                        swal("Không hủy đơn hàng nữa!", {
                            icon: "error",
                        });
                    }
                });
        }
    </script>
@endsection
