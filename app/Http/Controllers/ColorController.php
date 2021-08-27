<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $color = Color::orderBy('id', 'desc')->Paginate(3);
        return view('admin.color.index', compact('color'));
    }

    public function create()
    {
        return view('admin.color.create');
    }

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

    public function edit(Request $request)
    {
        $color = Color::find($request->id);
        return view('admin.color.edit', compact('color'));
    }

    public function update(Request $request)
    {
        $color = new Color();
        $color->saveColor($request);
     return redirect()->route('color.index');
    }
}
