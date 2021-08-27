@extends('admin.layout.main')

@section('title', 'Danh sách sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.template.content-header',['name'=>'Danh sách sản phẩm'])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
                <a href="{{ route('product.create') }}"><i style="padding: 5px" class="fa fa-plus"></i></a>

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
                                        {{-- <th class="check-col">
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                <input type="checkbox" class="crazy-check-all">
                                                <span></span>
                                            </label>
                                        </th> --}}
                                 
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Browser: activate to sort column ascending">STT</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Browser: activate to sort column ascending">Tiêu đề</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">Ảnh</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Engine version: activate to sort column ascending">Giá
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">Danh mục</th>
                                
                                        
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">Size</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">Trạng thái</th>

                                        <th style="width:120px" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr class="odd">
                                            {{-- <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                    <input type="checkbox" name="ids[]" value=" {{ $item->id }}"
                                                        data-id=" {{ $item->id }}" class="crazy-check-item">
                                                    <span></span>
                                                </label>
                                            </td> --}}
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <!-- Dùng onerror để show image mặc định-->
                                            <td style="text-align:center"><img onerror="this.src='{{asset('assets/admin/images/no-image.jpg')}}'" style="width:100px;height:100px"
                                                    src="{{ asset("$item->image_url") }}" alt="none"> </td>
                                            <td>{{number_format($item->price) .'Đ'}}</td>
                                            <td>{{ $item->hasCate ? $item->hasCate->name : '' }}</td>
                                         
                                            
                                            <td>
                                                @foreach ($item->size as $pro)
                                                    <span>{{ $pro->name }}-</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @if ($item->is_active == 1)
                                                    <span>Còn hàng </span>
                                                @else
                                                    <span>Hết hàng </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info"
                                                    href="{{ route('product.edit', ['id' => $item->id]) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger"
                                                    onclick='confirmDel("{{ route('product.remove', ['id' => $item->id]) }}")'><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{-- <th class="check-col">
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                <input type="checkbox" class="crazy-check-all">
                                                <span></span>
                                            </label>
                                        </th> --}}
                                        <th rowspan="1" colspan="1">STT</th>
                                        <th rowspan="1" colspan="1">Tiêu đề</th>
                                        <th rowspan="1" colspan="1">Ảnh</th>
                                        <th rowspan="1" colspan="1">Giá</th>
                                        <th rowspan="1" colspan="1">Danh mục</th>
                                  
                                        <th rowspan="1" colspan="1">Size</th>
                                        <th rowspan="1" colspan="1">Trạng thái</th>
                                        <th rowspan="1" colspan="1">
                                            Thao tác
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            
                        </div>
                        <div class="col-12 col-md-6 col-lg-8">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                {{$product->links("pagination::bootstrap-4")}}
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
@section('script')
    <script>
        $('.crazy-check-all').click(function() {
            // $("crazy-check-item").attr('checked', true);
            if ($(this).is(":checked")) {
                var a = $('.crazy-check-item');
                for (var i = 0; i < a.length; i++) {
                    a[i].checked = true;
                }
            }
            else
            {
                var a = $('.crazy-check-item');
                for (var i = 0; i < a.length; i++) {
                    a[i].checked = false;
                }
            }
          
        })
        $('.crazy-btn-remove').click(function(){
            var list = $('input[type="checkbox"].crazy-check-item:checked');
            var ids = [];
            if(list.length == 0){
                alert ("bạn chưa chọn mục nào"); 
            }
            for (var i = 0; i < list.length; i++) {
                ids[ids.length] = $(list[i]).val();
             
            }
        })
      
        // $('.crazy-btn-check-all').click(function(){
        //    if($('.crazy-check-all').is(':checked')){
        //    $('input[type="checkbox"].crazy-check-item').prop('checked',false);
        //    }
        //    else{
        //     $('input[type="checkbox"].crazy-check-item').prop('checked',true);
        //    }
          
        //    }
        // })
    </script>

  

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
