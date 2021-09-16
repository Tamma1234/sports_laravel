@extends('admin.layouts.main')

@section('title', 'Danh sách danh mục')
@section('content')
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    @include('admin.templates.content-header',['name'=>'Đơn hàng'])
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh Sách Đơn Hàng</h3>
           <a  href="{{route('order.create')}}"><i style="padding: 5px" class="fa fa-plus"></i></a>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Thời gian</th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Giá tiền</th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Phương Thức Thanh Toán</th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Trạng thái</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Thao tác</th>
                                    
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr class="odd" >
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->date_order}}</td>
                                    <td>{{$item->total}}</td>
                                    <td class="text-center">{{$item->payments}}</td>
                                    <td>
                                        @switch($item->bill_active)
                                        @case(0)
                                            <span>Chờ xác nhận</span>
                                            @break
                                        @case(1)
                                        <span>Đã xác nhận</span>
                                            @break
                                        @case(2)
                                        <span>Chờ thanh toán</span>
                                            @break
                                        @case(3)
                                        <span>Đã thanh toán</span>
                                            @break
                                        @case(4)
                                        <span>Đã xử lí</span>
                                            @break
                                        @case(5)
                                        <span>Đang giao hàng</span>
                                            @break
                                        @case(6)
                                        <span>Đã giao hàng</span>
                                            @break
                                        @default
                                    @endswitch
                                       
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href=""><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger" onclick='confirmDel("{{route('order.remove',['id'=>$item->id])}}")'><i class="fas fa-trash-alt"></i></button>
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
                            {{$order->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
           <div class="modal-content">
              
              <div class="modal-header">
                 <h4 class="modal-title">Modal Title</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <div class="modal-body">
                 Modal body..
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
           </div>
        </div>
     </div>
</div>
@endsection
@section('script')
{{-- <script >
    $('.btn-remove').click(function(){
        alert ("XÓa thành công");
    })
</script> --}}

<script>
    @if(session('msg'))
    swal("Thông báo", "{{session('msg')}}!", "info");
    @endif

    function confirmDel(redirectUrl) {
        // let redirectUrl = $(this).attr('id');
        console.log(redirectUrl);
        swal({
                title: "Bạn có muốn xóa không?",
                // text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = redirectUrl;
                } else {
                    swal("Hủy bỏ xóa!", {
                        icon: "error",
                    });
                }
            });
    }
</script>
@endsection