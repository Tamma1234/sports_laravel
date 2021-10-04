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
            } elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill = Bill::where('bill_active', '=', 4)->Paginate(8);
            }
        } else {
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
        $confisions = [
            [
                'field' => 'id',
                'where' => '=',
                'value' => $request->id
            ],
            [
                'field' => 'full_name',
                'where' => 'like',
                'value' => '%' . $request->full_name . '%'
            ],
           
        ];
        if (isset($_GET['is_active'])) {
            $is_active = $_GET['is_active'];
            if ($is_active == 'cho-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 0)->Paginate(8);
            } elseif ($is_active == 'da-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 1)->Paginate(8);
            } elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill = Bill::where('bill_active', '=', 4)->Paginate(8);
            }
        } else {
            if($request->id){
                $search_bill = Bill::where($confisions)->get();
            }
            if($request->full_name){
                $search_bill = Bill::where('full_name', 'like', '%'.$request->full_name.'%')->get();
            }
            if($request->price){
                $search_bill = Bill::where('total', 'like','%'.$request->price.'%')->get();
            }
            if($request->date_order){
                $search_bill = Bill::where('date_order','like',$request->date_order)->get();
            }
            if($request->updated_at){
                $search_bill = Bill::where('updated_at','like','%'. $request->updated_at .'%')->get();
            }
            if($request->full_name && $request->id){
                $search_bill = Bill::where('full_name', 'like', '%'.$request->full_name.'%')->orWhere('id','=',$request->id)->get();
            }
            if($request->price && $request->full_name && $request->id){
                $search_bill = Bill::where('total', 'like','%'.$request->price.'%')->orWhere('full_name', 'like', '%'.$request->full_name.'%')->orWhere('id','=',$request->id)->get();
            }
           
            
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
        $bills = Bill::withTrashed()->where('id', $request->id)->forceDelete();
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
