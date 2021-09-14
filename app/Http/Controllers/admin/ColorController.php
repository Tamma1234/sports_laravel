<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ColorController extends Controller
{
    // Tạo hàm index để hiển thị list data color
    // Sau đó trả về vỉew admin.color.index
    public function index()
    {
        $color = Color::orderBy('id', 'desc')->Paginate(3);
        return view('admin.colors.index', compact('color'));
    }

    // Tạo hàm create để thêm color
    // Trả về form create trong view admin.color.index
    public function create()
    {
        return view('admin.colors.create');
    }

    // Tạo hàm store để lưu color khi thêm với tham số truyền vào là Request,$request để lấy data
    // Gọi hàm saveColor($request) trong Models color để thực hiện lưu data 
    // Sau đó chuyển hướng về color.index
    public function store(Request $request)
    {
        $color = new Color();
        $color->saveColor($request);
        return redirect()->route('color.index');
    }

    public function delete(Request $request)
    {
        $color = Color::find($request->id);
        $color->delete();
        return redirect()->route('color.index')->with('msg', 'Xóa danh mục thành công');
    }

      // Tạo hàm edit để thêm color truyền tham số request để lấy data cần sửa
    // Trả về form create trong view admin.color.index
    public function edit(Request $request)
    {
        $color = Color::find($request->id);
        return view('admin.colors.edit', compact('color'));
    }
    // Tạo hàm store để lưu color khi sửa với tham số truyền vào là Request,$request để lấy data
    // Gọi hàm saveColor($request) trong Models color để thực hiện lưu data 
    // Sau đó chuyển hướng về color.index
    public function update(Request $request)
    {
        $color = new Color();
        $color->saveColor($request);
        return redirect()->route('color.index');
    }
}
