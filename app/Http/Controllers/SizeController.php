<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{

    // Tạo hàm index để hiển thị list data size
    // Sau đó trả về vỉew admin.size.index
    public function index()
    {
        $size = Size::orderBy('id', 'desc')->Paginate(3);
        return view('admin.size.index', compact('size'));
    }
    // Tạo hàm create để thêm size
    // Trả về form create trong view admin.size.index
    public function create()
    {
        return view('admin.size.create');
    }
    // Tạo hàm store để lưu size khi thêm với tham số truyền vào là Request $request 
    // Gọi hàm savesize($request) trong Models Size để lưu data 
    // Sau đó chuyển hướng về size.index
    public function store(Request $request)
    {
        $size = new Size();
        $size->savesize($request);
        return redirect()->route('size.index');
    }

    // Tạo hàm delete để xóa data, truyền tham số request để gọi data cần xóa
    // Xóa thành công thì chuyển hướng về size.index
    public function delete(Request $request)
    {
        $size = Size::find($request->id);
        $size->delete();
        return redirect()->route('size.index')->with('msg', 'Xóa danh mục thành công');
    }

    // Tạo hàm edit để sửa size
    // Trả về form edit trong view admin.size.index
    public function edit(Request $request)
    {
        $size = Size::find($request->id);
        return view('admin.size.edit', compact('size'));
    }

    // Tạo hàm store để lưu size khi sửa với tham số truyền vào là Request, $request 
    // Gọi hàm savesize($request) trong Models Size để thực hiện lưu data 
    // Sau đó chuyển hướng về size.index
    public function update(Request $request)
    {
        $size = new Size();
        $size->savesize($request);
        return redirect()->route('size.index');
    }
}
