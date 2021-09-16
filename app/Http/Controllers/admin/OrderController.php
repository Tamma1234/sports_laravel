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
        $bill = Bill::orderBy('id', 'desc')->Paginate(3);
        foreach($bill as $item){
            $billid = Bill::find($item->id);
            $billdetail = $billid->hasBillDetail;
        }
        return view('admin.orders.index',compact('bill','billdetail'));
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

    public function billEdit(Request $request)
    {
        $data = $request->all();
        $bill = Bill::find($request->id);
        $bill->bill_active = $data['active'];
        $bill->save();
    }
  
}
