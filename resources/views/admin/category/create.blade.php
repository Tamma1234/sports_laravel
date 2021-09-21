@extends('admin.layouts.main')

@section('title', 'Thêm sản phẩm')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="row">
            <div class="col-lg-12">
                @include('admin.templates.content-header',['name'=>'Thêm danh mục'])
                <form action="{{ route('category.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12 col-sm-12">
                            <!-- general form elements -->
                            <div class="card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin chi tiết </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->    
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục</label>
                                        <input type="text" name="name" class="form-control" i placeholder="Tiêu đề">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="form-label">Danh mục cha</label>
                                        <select class="js-example-basic-single form-control" name="parent_id" >
                                            <option value="0"></option>
                                            @foreach($category as $key => $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                   {{-- <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả</label>
                                        <textarea type="textarea" rows="4" cols="50" class="form-control" name="description" placeholder="Mô tả"></textarea>
                                    </div>  --}}
                                </div>
                            </div>
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                
                        <!--/.col (right) -->
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        
        
                </form>
            </div>
        </div>
     
    @endsection
  
