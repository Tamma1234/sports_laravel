@extends('admin.layouts.main')

@section('title', 'Danh sách sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.templates.content-header',['name'=>'Danh sách sản phẩm'])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
                <a href="{{ route('product.create') }}"><i style="padding: 5px" class="fa fa-plus"></i></a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        @include('admin.templates.search')
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">STT</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Tiêu đề</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">Ảnh</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">Giá
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Danh mục
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Trạng thái
                                        </th>
                                        <th style="width:120px" class="sorting" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr class="odd">
                                            <td>{{ $item->id }}</td>
                                            <td style="width:250px">{{ $item->title }}</td>
                                            <!-- Dùng onerror để show image mặc định-->
                                            <td style="text-align:center"><img
                                                    onerror="this.src='{{ asset('assets/admin/images/no-image.jpg') }}'"
                                                    style="width:100px;height:100px" src="{{ asset("storage/$item->image_url") }}"
                                                    alt="none">
                                            </td>
                                            <td>{{ number_format($item->price) . 'Đ' }}</td>
                                            <td>
                                                {{ $item->hasCate ? $item->hasCate->name : '' }}
                                            </td>
                                            <td>
                                                @if ($item->is_active == 0)
                                                    <span>Còn hàng </span>
                                                @else
                                                    <span>Hết hàng </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info"
                                                    href="{{ route('product.edit', ['id' => $item->id]) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger"
                                                    onclick='confirmDel("{{ route('product.remove', ['id' => $item->id]) }}")'>
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">STT</th>
                                        <th rowspan="1" colspan="1">Tiêu đề</th>
                                        <th rowspan="1" colspan="1">Ảnh</th>
                                        <th rowspan="1" colspan="1">Giá</th>
                                        <th rowspan="1" colspan="1">Danh mục</th>
                                        <th rowspan="1" colspan="1">Trạng thái</th>
                                        <th rowspan="1" colspan="1"> Thao tác </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style="margin-left: 450px">
                                {{ $product->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.content -->
    </div>
@endsection

