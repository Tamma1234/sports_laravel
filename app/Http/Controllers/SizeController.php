<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
class SizeController extends Controller
{
    public function index()
    {
        $size = Size::orderBy('id', 'desc')->Paginate(3);
        return view('admin.size.index', compact('size'));
    }

    public function create()
    {
        return view('admin.size.create');
    }

    public function store(Request $request)
    {
        $size = new Size();
        $size->savesize($request);
        return redirect()->route('size.index');
    }

    public function delete(Request $request)
    {
        $size = Size::find($request->id);
        $size->delete();
        return redirect()->route('size.index')->with('msg', 'Xóa danh mục thành công');
    }

    public function edit(Request $request)
    {
        $size = Size::find($request->id);
        return view('admin.size.edit', compact('size'));
    }

    public function update(Request $request)
    {
        $size = new Size();
            $size->savesize($request);
     return redirect()->route('size.index');
    }
}
