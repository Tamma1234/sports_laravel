<?php

namespace App\Http\Controllers\admin;

use App\Models\Bill;
use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        $order = Bill::orderBy('id', 'desc')->Paginate(3);
        return view('admin.orders.index',compact('order'));
    }

    public function create()
    {
        // $category = Category::all();
        // $color = Color::all();
        // $size = Size::all();
        return view('admin.orders.create');
    }

    public function delete(Request $request)
    {
        $bills = Bill::find($request->id);
        $customerId = $bills->hasCustomer->id;
        $customers = Customer::find($customerId);
        $billdetail = $bills->hasBillDetail;
        $bills->delete();
        return redirect()->route('order.index')->with('msg', 'Xóa sản phẩm thành công');
    }

  
}
