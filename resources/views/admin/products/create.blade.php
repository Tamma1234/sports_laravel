@extends('admin.layouts.main')

@section('title', 'Thêm sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row">
            <div class="col-lg-12">
                @include('admin.templates.content-header',['name'=>'Thêm sản phẩm'])
                <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Thông tin chi tiết </h3>
                    </div>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12 col-md-7">
                            <!-- general form elements -->
                            <div class="card card-primary">

                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề sản phẩm</label>
                                        <input type="text" name="title" class="form-control" i placeholder="Tiêu đề">
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea name="description" class="form-control" rows="3"
                                                placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá phản phẩm</label>
                                        <input type="number" class="form-control" name="price" placeholder="Giá sản phẩm">
                                    </div>
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Danh mục</label>
                                        <select class="form-control" name="category_id">
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Mã sản phẩm</label>
                                        <input type="text" name="masp" class="form-control" placeholder="Enter ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="is_active">
                                            <option >Trạng thái</option>
                                            <option value="0">Hết hàng</option>
                                            <option value="1">Còn hàng</option>

                                        </select>
                                    </div>
                                    @error('is_active')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Thuộc tính</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputError"><i class="fas fa-eye-dropper"></i>
                                            Màu sắc :</label>
                                        <select class="form-control" name="color_id">
                                            <option value="0">Chọn màu</option>
                                            @foreach ($color as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('color_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputError"><i class="fas fa-sitemap"></i>
                                            Size :</label>
                                        @foreach ($size as $item)
                                            <input name="size[]" type="checkbox" value="{{ $item->id }}">
                                            <label for="">{{ $item->name }}</label>

                                        @endforeach

                                    </div>
                                    @error('size')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-12 col-md-5">
                            <!-- general form elements disabled -->
                            <div class="card card-warning">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File ảnh</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" id="file" onchange="preview_image(event)"
                                                    class="custom-file-input" name="image_url">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                        </div>
                                   
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file" id="preview">
                                                <img onerror="this.src='{{ asset('assets/admin/images/no-image.jpg') }}'"
                                                    src="" id="output_image" />
                                            </div>
                                        </div>
                                    </div>

                                    @error('image_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thư viện ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" multiple id="galary" onchange="previewGallery(this)"
                                                class="custom-file-input" name="gallery[]">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="height: 200px" >

                                    <div class="galary" id="preview-view">
                                        <img src="" alt="" >
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
