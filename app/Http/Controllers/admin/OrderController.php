<?php

namespace App\Http\Controllers\admin;

use App\Models\Bill;
use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    // Hiển thị danh sách đơn hàng 
    public function index(Request $request)
    {
      
        if (isset($_GET['is_active'])) {
            $is_active = $_GET['is_active'];
            if ($is_active == 'cho-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 0)->Paginate(8);
            } elseif ($is_active == 'da-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 1)->Paginate(8);
            }
            elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill= Bill::where('bill_active', '=', 4)->Paginate(8);
            }
            
        }  else {
            $bill = Bill::orderBy('id', 'desc')->Paginate(5);
        }
        return view('admin.orders.index', compact('bill'));
    }

    // Hủy các đơn hàng và cho vào thùng rác
    public function delete(Request $request)
    {
        $bills = Bill::find($request->id);
        $bills->delete();
        return redirect()->route('order.index')->with('msg', 'Xóa sản phẩm thành công');
    }

    // Tìm kiếm đơn hàng theo mã đơn hàng, tên sản phẩm
    public function search(Request $request)
    {   
        $keywords = $request->keyword_submit;
        if (isset($_GET['is_active'])) {
            $is_active = $_GET['is_active'];
            if ($is_active == 'cho-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 0)->Paginate(8);
            } elseif ($is_active == 'da-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 1)->Paginate(8);
            }
            elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill= Bill::where('bill_active', '=', 4)->Paginate(8);
            }
        }  else {
            $search_bill = Bill::where('id','like',  $keywords)->orWhere('full_name','like','%'.$keywords.'%')->get();
        }
        return view('admin.orders.search', compact('search_bill'));
     
        
    }
    //Lấy ra đơn hàng đã hủy
    public function orderTrash(Request $request)
    {
        $bills = Bill::onlyTrashed()->get();
        return view('admin.orders.trash', compact('bills'));
    }
    // Xóa vĩnh viễn đơn hàng trong thùng giác
    public function trashOut(Request $request)
    {
        $bills = Bill::withTrashed()->where('id',$request->id)->forceDelete();
        return view('admin.orders.trash', compact('bills'));
    }

    // Chỉnh trạng thái đơn hàng 
    public function billEdit(Request $request)
    {
        $data = $request->all();
     
        $bill = Bill::find($request->id);
        
        $bill->bill_active = $data['active'];
        
        $bill->save();
    }
}
