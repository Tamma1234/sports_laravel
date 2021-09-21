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
    // Hiển thị danh sách đơn hàng 
    public function index(Request $request)
    {
        $bill = Bill::orderBy('id', 'desc')->Paginate(5);
        foreach ($bill as $item) {
            $billid = Bill::find($item->id);
            $billdetail = $billid->hasBillDetail;
           
        }
        return view('admin.orders.index', compact('bill', 'billdetail'));
    }

    public function delete(Request $request)
    {
        $bills = Bill::find($request->id);
        $bills->delete();
        return redirect()->route('order.index')->with('msg', 'Xóa sản phẩm thành công');
    }
    //Xóa đơn hàng vào trong thùng rác
    public function orderTrash(Request $request)
    {
        $bills = Bill::onlyTrashed()->get();
        return view('admin.orders.trash', compact('bills'));
    }
    // Xóa vĩnh viễn đơn hàng
    public function trashOut(Request $request)
    {
        $bills = Bill::withTrashed()->where('id',$request->id)->forceDelete();
        return view('admin.orders.trash', compact('bills'));
    }

    public function billEdit(Request $request)
    {
        $data = $request->all();
     
        $bill = Bill::find($request->id);
        
        $bill->bill_active = $data['active'];
        
        $bill->save();
    }
}
