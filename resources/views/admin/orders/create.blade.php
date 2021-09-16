@extends('admin.layouts.main')

@section('title', 'Thêm sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row">
            <div class="col-lg-12">
                @include('admin.templates.content-header',['name'=>'Thêm đơn hàng'])
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Thông tin đơn hàng mới </h3>
                    </div>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12 col-md-7">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <h5 class="text-center" style="padding: 20px;border-bottom: 1px solid #ced4da;">Thông tin khách hàng </h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên khách hàng</label>
                                        <input type="text" name="title" class="form-control" i placeholder="Họ và tên">
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email khách hàng</label>
                                        <input type="number" class="form-control" name="price" placeholder="Email">
                                    </div>
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại</label>
                                        <input type="number" class="form-control" name="price"
                                            placeholder="Số điện thoại">
                                    </div>
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="masp" class="form-control" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Ghi chú</label>
                                            <textarea name="description" class="form-control" rows="3"
                                                placeholder="Ghi chú"></textarea>
                                        </div>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-1 mb-4">
                                        <label for="">Chi tiết đơn hàng</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-12 col-md-5">
                            <!-- general form elements disabled -->

                            <div class="card card-warning">
                                <!-- /.card-header -->
                                <h5 class="text-center" style="padding: 20px;border-bottom: 1px solid #ced4da;">Thông tin đơn hàng </h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label for="">Phương thức thanh toán</label>
                                            <div>
                                                <label class="inp-label checkbox-label m-radio pr-3"><input type="radio"
                                                        name="payments" value="0"
                                                        class=""> <span></span> <i>Thanh toán tiền mặt</i></label>
                                           
                                                <label class="
                                                        inp-label checkbox-label m-radio pr-3"><input type="radio"
                                                        name="payments" value="1"
                                                        class=""> <span></span> <i>Thanh toán online</i></label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    @error('description')
                                        <div class="
                                                        alert alert-danger">{{ $message }}
                                            </div>
                                        @enderror
                                        <div class="form-group">
                                            <label>Phí giao hàng</label>
                                            <div class="">
                                                <div class="
                                                input-group number input-number-group " id=" input-shipping_fee-group">
                                                <input type="number" name="shipping_fee" id="shipping_fee"
                                                    class="form-control m-input" placeholder="nhập phí giao hàng">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>

                                            </div>
                                            <div class="form-control-feedback input-message-alert"
                                                id="input-shipping_fee-message-alert">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>VAT</label>
                                        <div class="">
                                            <div class="
                                            input-group number input-number-group " id=" input-tax-group">
                                            <input type="number" name="tax" id="tax" class="form-control m-input"
                                                placeholder="nhập VAT">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>

                                        </div>
                                        <div class="form-control-feedback input-message-alert"
                                            id="input-tax-message-alert"></div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái đơn hàng</label>
                                   
                                        <select class="form-control" name="bill_active" id="">
                                            <option value="0">Đang chờ xác nhận</option>
                                            <option value="1">Đã xác nhận </option>
                                            <option value="2">Chờ thanh toán</option>
                                            <option value="3">Đã thanh toán</option>
                                            <option value="4">Đang xử lý</option>
                                            <option value="5">Đang giao hàng</option>
                                            <option value="6">Đã hoàn thành</option>
                                            <option value="7">Hủy</option>
                                        </select>
                             
                                    
                                </div>
                            </div>




                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </form>
        </div>
    </div>

@endsection
@section('script')

    <script>
        function previewGallery(input) {

            const preview = document.getElementById('preview-view');

            const {
                files
            } = input;
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    const img = document.createElement('img');
                    const text = document.createElement('span');
                    const nodeText = document.createTextNode('X');
                    img.src = e.target.result;
                    div.appendChild(img);
                    text.appendChild(nodeText);
                    div.appendChild(text);
                    div.appendChild(img);
                    preview.appendChild(div);
                    console.log(preview);
                    // console.log(array.length);
                    $('span').click(function() {
                        jQuery(this).closest('div').remove();
                    });

                }
                reader.readAsDataURL(file);

            })


        }

        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>



@endsection
