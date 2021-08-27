@extends('admin.layout.main')

@section('title', 'Thêm sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Sửa Danh Mục</h1>
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
                <form action="{{route('size.update',$size->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{$size->id}}">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12 col-sm-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin chi tiết </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->    
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục</label>
                                        <input type="text" name="name" class="form-control" i placeholder="Tiêu đề"  value="{{$size->name}}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả</label>
                                        <textarea type="textarea" rows="4" cols="50" class="form-control" name="description" placeholder="Mô tả" >{{$size->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                
                        <!--/.col (right) -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        
        
                </form>
            </div>
        </div>
     
    @endsection
  
