@extends('admin.layout.main')

@section('title', 'Danh sách danh mục')
@section('content')
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách Màu Sản Phẩm</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách Màu Sản Phẩm</h3>
           <a  href="{{route('color.create')}}"><i style="padding: 5px" class="fa fa-plus"></i></a>
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
                                        aria-label="Rendering engine: activate to sort column descending">STT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Tên Màu</th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Tổng sản phẩm</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Thao tác</th>
                                    
                            </thead>
                            <tbody>
                                @foreach ($color as $item)
                                <tr class="odd" >
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->hasProducts->count()}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('color.edit',['id'=>$item->id])}}"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger" onclick='confirmDel("{{route('color.remove',['id'=>$item->id])}}")'><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                               
         
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">STT</th>
                                    <th rowspan="1" colspan="1">Tên màu</th>
                                    <th rowspan="1" colspan="1">Tổng sản phẩm</th>
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
                            {{$color->links("pagination::bootstrap-4")}}
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