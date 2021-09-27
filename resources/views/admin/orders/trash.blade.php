@extends('admin.layouts.main')

@section('title', 'Danh sách danh mục')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.templates.content-header',['name'=>'Đơn Hàng Đã Xóa'])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh Sách Đơn Hàng Đã Xóa</h3>
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
                                    @foreach ($bills as $item)
                                        <tr class="odd">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->date_order }}</td>
                                            <td>{{number_format($item->total).'Đ'  }}</td>
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
                                                    <button class="btn btn-danger"
                                                        onclick='confirmDel("{{ route('trash.out', ['id' => $item->id]) }}")'><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                            </table>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style="margin-left: 450px">
                                {{-- {{ $bills->links('pagination::bootstrap-4') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            
        </div>
</div>
 @endsection
